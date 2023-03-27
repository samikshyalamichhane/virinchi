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
        return view('enrollment::enrollmentList',compact('enrollments'));
    }

    public function applicationLists()
    {
        $applications = Application::get();
        return view('enrollment::applicationList',compact('applications'));
    }
    public function appointmentLists()
    {
        $appointments = Appointment::get();
        return view('enrollment::appointmentList',compact('appointments'));
    }
    public function requestInfoLists()
    {
        $requestInfos = RequestInfo::get();
        return view('enrollment::requestInfoList',compact('requestInfos'));
    }

    public function viewEnrollment(Request $request){
        $detail = Enrollment::findOrFail($request->id);
        return view('enrollment::enrollmentPreview', compact('detail'));
    }

    public function viewApplication(Request $request){
        $detail = Application::findOrFail($request->id);
        return view('enrollment::applicationPreview', compact('detail'));
    }

    public function viewAppointment(Request $request){
        $detail = Appointment::findOrFail($request->id);
        return view('enrollment::appointmentPreview', compact('detail'));
    }

    public function viewRequestInfo(Request $request){
        $detail = RequestInfo::findOrFail($request->id);
        return view('enrollment::requestInfoPreview', compact('detail'));
    }

    public function deleteRequestInfo(Request $request){
        $detail = RequestInfo::findOrFail($request->id);
        $detail->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }

    public function deleteApplication(Request $request){
        $detail = Application::findOrFail($request->id);
        $detail->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }

    public function deleteAppointment(Request $request){
        $detail = Appointment::findOrFail($request->id);
        $detail->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }

    public function deleteEnrollment(Request $request){
        $detail = Enrollment::findOrFail($request->id);
        $detail->delete();
        return redirect()->back()->with('success', 'Deleted successfully');
    }




    
}
