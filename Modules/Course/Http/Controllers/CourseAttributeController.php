<?php

namespace Modules\Course\Http\Controllers;

use App\Http\Requests\CourseAttributeRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Course\Entities\Course;
use Modules\Course\Entities\CourseAttribute;
use Modules\CourseCategory\Entities\CourseCategory;

class CourseAttributeController extends Controller
{
    public function index()
    {
        return view('course::index');
    }

    public function create(Request $request, $id)
    {
        $course = Course::findOrFail($id);
        $detail = CourseAttribute::findOrFail($request->course_attribute_id);
        $courses = Course::with('courseAttributes')->get();
        $coursecategories = CourseCategory::published()->get();
        $tab = 'component-1-2';
        return view('course::courseattribute.create', compact('course', 'courses', 'detail', 'coursecategories'));
    }

    public function store(CourseAttributeRequest $request)
    {
        try {
            $project = new CourseAttribute();
            $project->title = $request->title;
            $project->attribute_description = $request->attribute_description;
            $project->course_id = $request->course_id;
            $project->publish = $request->publish ? 1 : 0;
            $project->save();
            return redirect()->route('courseattributes.create',['id'=>$request->course_id,'course_attribute_id'=>$project->id])->with('success', 'course module created successfully');
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
        $detail = CourseAttribute::findOrFail($request->course_attribute_id);
        $courses = Course::with('courseAttributes')->get();
        $coursecategories = CourseCategory::published()->get();
        $tab = 'component-1-2';
        return view('course::courseattribute.edit', compact('course', 'courses', 'detail', 'coursecategories'));
    }

    public function update(CourseAttributeRequest $request, $id)
    {
        $project =  CourseAttribute::findOrFail($id);
        try {
            $project->title = $request->title;
            $project->attribute_description = $request->attribute_description;
            $project->course_id = $request->course_id;
            $project->publish = $request->publish ? 1 : 0;
            $project->save();
            return redirect()->route('courseattributes.create',['id'=>$request->course_id,'course_attribute_id'=>$id])->with('success', 'Course updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function destroy($id)
    {
        $courseattribute = CourseAttribute::findOrFail($id);
        $courseattribute->delete();
        return back()->with('success', 'Course attribute deleted successfully');
    }
}
