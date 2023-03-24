<?php

namespace Modules\ExperienceVirinchi\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\ExperienceVirinchi\Entities\ExperienceVirinchi;
use Illuminate\Foundation\Validation\ValidatesRequests;

class ExperienceVirinchiController extends Controller
{
    use ValidatesRequests;

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $details = ExperienceVirinchi::orderBy('updated_at', 'DESC')->paginate(10000);
        return view('experiencevirinchi::index',compact('details'));
    }

    public function create()
    {
        return view('experiencevirinchi::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:500',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {
            $blog = new ExperienceVirinchi();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->link = $request->link;
            $blog->short_description = $request->short_description;
            $blog->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/experience', $filename);
                $blog->image = $path;
            }
            $blog->save();
            return redirect()->route('experience-virinchi.index')->with('success', 'Blog created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('experiencevirinchi::show');
    }

    public function edit($id)
    {
        $detail = ExperienceVirinchi::findOrFail($id);
        return view('experiencevirinchi::edit',compact('detail'));
    }

    public function update(Request $request, $id)
    {
        $blog =  ExperienceVirinchi::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:500',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {

            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->link = $request->link;
            $blog->short_description = $request->short_description;
            $blog->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/experience', $filename);
                $blog->image = $path;
            }
            $blog->save();
            return redirect()->route('experience-virinchi.index')->with('success', 'Blog updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $blog = ExperienceVirinchi::findOrFail($id);
        $blog->delete();
        return redirect()->route('experience-virinchi.index')->with('success', 'Blog deleted successfully');
    }
}
