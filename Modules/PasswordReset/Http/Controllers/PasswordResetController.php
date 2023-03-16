<?php

namespace Modules\PasswordReset\Http\Controllers;

use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Mail;
use Illuminate\Support\Str;
use Modules\PasswordReset\Emails\SendPasswordResetToAdmin;
use Modules\PasswordReset\Emails\SendPasswordResetToUser;

class PasswordResetController extends Controller
{

    public function showForgetPasswordForm()
    {

        return view('passwordreset::forgetPassword');
    }

    public function submitForgetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
        ]);

        $token = Str::random(64);
        $user = User::where('email', $request->email)->first();

        DB::table('password_resets')->insert([
            'email' => $request->email,
            'token' => $token,
            'created_at' => Carbon::now()
        ]);
        Mail::to($request->email)->send(new SendPasswordResetToUser($user, $token));

        if (Mail::failures() != 0) {
            return back()->with('success', 'Success! password reset link has been sent to your email');
        }
        return back()->with('error', 'Something went wrong. Please try again later!');
    }
    public function showResetPasswordForm($token)
    {
        return view('passwordreset::forgetPasswordLink', ['token' => $token]);
    }

    public function submitResetPasswordForm(Request $request)
    {
        $request->validate([
            'email' => 'required|email|exists:users',
            'password' => 'required|string|min:6|confirmed',
            'password_confirmation' => 'required'
        ]);

        $updatePassword = DB::table('password_resets')
            ->where([
                'email' => $request->email,
                'token' => $request->token
            ])
            ->first();

        if (!$updatePassword) {
            return back()->withInput()->with('error', 'Invalid token!');
        }
        // $requested_email = $request->email;

        $user = User::where('email', $request->email)
            ->update(['password' => Hash::make($request->password)]);
        $requested_user = User::where('email',$request->email)->first();
        $adminUsers = User::where('publish',1)->whereHas('roles', function ($q) {
            $q->where('name', 'admin');
        })->get();
        foreach($adminUsers as $user){
        Mail::to($user->email)->send(new SendPasswordResetToAdmin($user, $requested_user->email ));
        }
        DB::table('password_resets')->where(['email' => $request->email])->delete();
        if($requested_user->hasAnyRole('customer')){
            return redirect()->route('customer.loginpage')->with('success', 'Your password has been changed!');
        } else {
            return redirect('/login')->with('success', 'Your password has been changed!');
        }
    }
}
