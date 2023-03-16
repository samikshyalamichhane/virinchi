<?php

namespace Modules\Frontend\Http\Controllers;

use App\Http\Requests\CustomerLoginRequest;
use App\Http\Requests\CustomerRegisterRequest;
use App\Mail\AccountVerification;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Spatie\Permission\Models\Role;

class CustomerController extends Controller
{
    public function customerLoginPage(){
        return view('frontend::customer.customerLogin');
    }

    public function customerPostLogin(CustomerLoginRequest $request){
        $user = User::where('email', $request->email)->first();
        if (!$user) {
            return back()->withErrors(['login' => 'Email And Password Donot Match!']);
        }
        if( !$user->hasAnyRole('customer')){
            return back()->withErrors(['login'  => 'You must be customer to login!']);
        }
        if ($user->verified == 0) {
            return back()->withErrors(['login'  => 'Please verify your Account first!']);
        }
        if ($user->publish == 0) {
            return back()->withErrors(['login'  => 'Please contact Admin!']);
        }
        $remember_token= $request->has('remember_token') ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password, 'verified' => 1 ], $remember_token)) {
            return redirect()->route('customer-dashboard');
        } else {
            return back()->withErrors(['login' => 'Something Went Wrong. Please tyr again!']);
        }

    }

    public function customerRegisterPage(){
        return view('frontend::customer.customerRegister');
    }

    public function customerPostRegister(CustomerRegisterRequest $request){
        try {
            DB::beginTransaction();
            $input = $request->except(['password_confirmation']);
            $input['password'] = Hash::make($input['password']);
            $input['verification_hash'] = sha1(time());
            $input['publish'] = 1;
            $input['terms_of_service'] = $request->terms_of_service;
             $user = User::create($input);
             $user->assignRole('customer');
             Mail::to($user->email)->send(new AccountVerification($user));
            DB::commit();
            return redirect()->back()->with('success', 'Registered Successfully! Please verify your email');
        } catch (\Exception $e) {
            DB::rollBack();
            return redirect()->back()->with('success', 'Something went wrong! Please try later');
        }
    
    }

    public function verify(Request $request, $hash){
        $customer = User::where('verification_hash', $hash)->first();
        if (!$customer) {
            return redirect()->route('customer.loginpage')->with('error', 'Customer Not Found!');
        } else {
            if ($customer->verified == 1) {
                return redirect()->route('customer.loginpage')->with('success', 'Account already verified');
            }
            $customer->verified = 1;
            // $customer->verified = Carbon::now();
            $customer->save();
            return redirect()->route('customer.loginpage')->with('success', 'Thank You For Verification! You Can Login Now!.');
        }
    }

    public function customerLogout()
    {
        Auth::logout();
        Session::flush();
        return redirect()->route('customer.login');
    }

    public function customerDashboard(){
        return view('frontend::customer.customerDashboard');
    }
}
