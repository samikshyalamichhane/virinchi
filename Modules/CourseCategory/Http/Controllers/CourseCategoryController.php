<?php

namespace Modules\CourseCategory\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller;
use Modules\CourseCategory\Entities\CourseCategory;

class CourseCategoryController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $coursecategories = CourseCategory::orderBy('updated_at', 'desc')->paginate(100000);
        return view('coursecategory::index', compact('coursecategories'));
    }


    public function create()
    {

        return view('coursecategory::create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:500',
        ]);
        try {
            $coursecategory = new CourseCategory;
            $coursecategory->title = $request->title;
            $coursecategory->description = $request->description;
            $coursecategory->publish = $request->publish ? 1 : 0;
            $coursecategory->save();
            return redirect()->route('coursecategory.index')->with('success', 'coursecategory created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function edit($id)
    {
        $detail = CourseCategory::findOrFail($id);
        return view('coursecategory::edit', compact('detail'));
    }


    public function update(Request $request, $id)
    {
        $coursecategory = CourseCategory::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:500',
        ]);
        try {
            $coursecategory->title = $request->title;
            $coursecategory->description = $request->description;
            $coursecategory->publish = $request->publish ? 1 : 0;
            $coursecategory->save();
            return redirect()->route('coursecategory.index')->with('success', 'coursecategory updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }


    public function destroy($id)
    {
        $coursecategory = CourseCategory::findOrFail($id);
        $coursecategory->delete();
        return redirect()->route('coursecategory.index')->with('success', 'coursecategory deleted successfully');
    }
}
