<?php

namespace Modules\Admission\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Modules\Admission\Entities\Admission;

class AdmissionController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $admissions = Admission::orderBy('updated_at', 'DESC')->paginate(10000);
        return view('admission::index',compact('admissions'));
    }

    public function create()
    {
        return view('admission::create');
    }

    public function store(Request $request)
    { 
        $this->validate($request, [
        'course_title' => 'required',
        'date' => "required",
    ]);
    try {
        $blog = new Admission();
        $blog->course_title = $request->course_title;
        $blog->date = $request->date;
        $blog->status = $request->status;
        $blog->publish = $request->publish ? 1 : 0;
        $blog->save();
        return redirect()->route('admission.index')->with('success', 'Admission created successfully');
    } catch (\Exception $e) {
        return redirect()->back()->with('error', $e->getMessage());
    }
    }

    public function show($id)
    {
        return view('admission::show');
    }

    public function edit($id)
    {
        $admission = Admission::findOrFail($id);
        return view('admission::edit',compact('admission'));
    }

    public function update(Request $request, $id)
    {
        $blog =  Admission::findOrFail($id);
        $this->validate($request, [
            'course_title' => 'required',
            'date' => "required",
        ]);
        try {

            $blog->course_title = $request->course_title;
            $blog->date = $request->date;
            $blog->status = $request->status;
            $blog->publish = $request->publish ? 1 : 0;
            
            $blog->save();
            return redirect()->route('admission.index')->with('success', 'Admission updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $blog = Admission::findOrFail($id);
        $blog->delete();
        return redirect()->route('admission.index')->with('success', 'Admission deleted successfully');
    }
}
