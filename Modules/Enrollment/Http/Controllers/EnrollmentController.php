<?php

namespace Modules\Enrollment\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Frontend\Entities\Application;
use Modules\Frontend\Entities\Appointment;
use Modules\Frontend\Entities\Enrollment;
use Modules\Frontend\Entities\RequestInfo;

class EnrollmentController extends Controller
{
    public function index()
    {
        $enrollments = Enrollment::get();
        return view('enrollment::index',compact('enrollments'));
    }

    public function applicationLists()
    {
        $applications = Application::get();
        return view('enrollment::index',compact('applications'));
    }
    public function appointmentLists()
    {
        $enrollments = Appointment::get();
        return view('enrollment::index',compact('enrollments'));
    }
    public function requestInfoLists()
    {
        $requestInfos = RequestInfo::get();
        return view('enrollment::requestInfoList',compact('requestInfos'));
    }

    public function viewEnrollment(Request $request){
        $detail = Enrollment::findOrFail($request->id);
        return view('enrollment::index', compact('detail'));
    }

    public function viewApplication(Request $request){
        $detail = Application::findOrFail($request->id);
        return view('enrollment::index', compact('detail'));
    }

    public function viewAppointment(Request $request){
        $detail = Appointment::findOrFail($request->id);
        return view('enrollment::index', compact('detail'));
    }

    public function viewRequestInfo(Request $request){
        $detail = RequestInfo::findOrFail($request->id);
        return view('enrollment::requestInfoPreview', compact('detail'));
    }




    
}
