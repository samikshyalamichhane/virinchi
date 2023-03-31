<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Modules\Club\Entities\Club;
use Modules\Frontend\Entities\Appointment;
use Modules\Frontend\Entities\Enrollment;
use Modules\Frontend\Entities\RequestInfo;
use Modules\IctMela\Entities\IctMela;
use Modules\News\Entities\News;
use Modules\TechNews\Entities\TechNews;
use Modules\Testimonial\Entities\Testimonial;

class AdminLoginController extends Controller
{
    public function adminLogin(LoginRequest $request)
    {
        $user = User::where('email', $request->email)->first();
        // dd($user->hasAnyRole('admin|user'));
        if (!$user) {
            return back()->with(['success' => 'Email And Password Donot Match!']);
        }
        if ($user->email != 'admin@gmail.com') {

            if ($user->hasAnyRole('customer')) {
                return back()->with(['error'  => 'You must be admin to login!']);
            }
        }
        $remember_token = $request->has('remember_token') ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password], $remember_token) || Auth::attempt(['email' => 'admin@gmail.com', 'password' => $request->password], $remember_token)) {
            return redirect()->route('dashboard');
        } else {
            return back()->with(['success' => 'Something Went Wrong. Please tyr again!']);
        }
    }

    public function dashboard()
    {
        if (auth()->user()->hasAnyRole('customer')) {
            abort(403);
        }
        $technews = TechNews::count();
        $events = News::count();
        $club = Club::count();
        $ictmela = IctMela::count();
        $users = User::count();
        $testimonial = Testimonial::count();
        $requestInfos = RequestInfo::get();
        $appointments = Appointment::get();
        $enrollments = Enrollment::get();
        return view('dashboard',compact('technews','events','club','ictmela','users','testimonial','requestInfos','appointments','enrollments'));
    }
}
