<?php

namespace Modules\Course\Http\Controllers;

use App\Http\Requests\CourseRequest;
use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Course\Entities\Course;
use Modules\CourseCategory\Entities\CourseCategory;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{
    public function index()
    {
        $courses = Course::get();
        return view('course::index',compact('courses'));
    }

    public function create()
    {
        $courseCategories = CourseCategory::published()->get();
        return view('course::create',compact('courseCategories'));
    }

    public function store(CourseRequest $request)
    {
        try {
            $project = new Course();
            $project->title = $request->title;
            $project->overview = $request->overview;
            $project->course_category_id = $request->course_category_id;
            $project->publish = $request->publish ? 1 : 0;
            $project->scope = $request->scope;
            $project->eligibility = $request->eligibility;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/course', $filename);
                $project->image = $path;
            }
            if ($request->hasFile('scope_image')) {
                $file = $request->scope_image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/course', $filename);
                $project->scope_image = $path;
            }
            $project->save();
            return redirect()->route('courses.index')->with('success', 'course created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('course::show');
    }

    public function edit($id)
    {
        $course = Course::findOrFail($id);
        $courses = Course::with('courseModules')->get();
        $coursecategories = CourseCategory::published()->get();
        return view('course::edit', compact('course','courses','coursecategories'));
    }

    public function update(CourseRequest $request, $id)
    {
        $project =  Course::findOrFail($id);
        try {
            $project->title = $request->title;
            $project->overview = $request->overview;
            $project->course_category_id = $request->course_category_id;
            $project->publish = $request->publish ? 1 : 0;
            $project->scope = $request->scope;
            $project->eligibility = $request->eligibility;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/project', $filename);
                $project->image = $path;
            }
            if ($request->hasFile('scope_image')) {
                $file = $request->scope_image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/project', $filename);
                $project->scope_image = $path;
            }
            $project->save();
            return redirect()->route('courses.index')->with('success', 'Course updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $course = Course::findOrFail($id);
        $course->delete();
        return back()->with('success', 'Course deleted successfully');
    }

    
}
