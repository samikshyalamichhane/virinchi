<?php

namespace Modules\Course\Http\Controllers;

use App\Http\Requests\CourseModuleRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Course\Entities\Course;
use Modules\Course\Entities\CourseModule;
use Modules\CourseCategory\Entities\CourseCategory;

class CourseModuleController extends Controller
{
    public function index()
    {
        return view('course::index');
    }

    public function create(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $detail = CourseModule::findOrFail($request->course_module_id);
        $courses = Course::with('courseModules')->get();
        $coursecategories = CourseCategory::published()->get();
        $tab = 'component-1-2';
        return view('course::coursemodule.create', compact('course', 'courses', 'detail', 'coursecategories'));
    }

    public function store(CourseModuleRequest $request)
    {
        try {
            $project = new CourseModule();
            $project->title = $request->title;
            $project->description = $request->description;
            $project->course_id = $request->course_id;
            $project->publish = $request->publish ? 1 : 0;
            // dd($project);
            $project->save();
            return redirect()->route('coursemodules.create',['id'=>$request->course_id,'course_module_id'=>$project->id])->with('success', 'course module created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('course::show');
    }

    public function edit(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $detail = CourseModule::findOrFail($request->course_module_id);
        $courses = Course::with('courseModules')->get();
        $coursecategories = CourseCategory::published()->get();
        $tab = 'component-1-2';
        return view('course::coursemodule.edit', compact('course', 'courses', 'detail', 'coursecategories'));
    }

    public function update(CourseModuleRequest $request, $id)
    {
        $project =  CourseModule::findOrFail($id);
        try {
            $project->title = $request->title;
            $project->description = $request->description;
            $project->course_id = $request->course_id;
            $project->publish = $request->publish ? 1 : 0;
            $project->save();
            return redirect()->route('coursemodules.create',['id'=>$request->course_id,'course_module_id'=>$id])->with('success', 'Course updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function destroy($id)
    {
        $courseModule = CourseModule::findOrFail($id);
        $courseModule->delete();
        return back()->with('success', 'Course Module deleted successfully');
    }
}
