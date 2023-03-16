<?php

namespace Modules\College\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\College\Entities\College;

class CollegeController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $colleges = College::orderBy('updated_at', 'DESC')->paginate(10000);
        return view('college::index', compact('colleges'));
    }

    public function create()
    {
        return view('college::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:500',
            'description' => "nullable",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {
            $college = new College;
            $college->title = $request->title;
            $college->description = $request->description;
            // $college->meta_title = $request->meta_title;
            // $college->meta_keyword = $request->meta_keyword;
            // $college->meta_description = $request->meta_description;
            $college->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/college', $filename);
                $college->image = $path;
            }
            // if ($request->hasFile('college_inner_banner')) {
            //     $file = $request->college_inner_banner;
            //     $filename = time() . '.' . $file->getClientOriginalExtension();
            //     // $path = Storage::put('public/teams', $file, 'public');
            //     $path = $file->storeAs('public/college', $filename);
            //     $college->college_inner_banner = $path;
            // }
            $college->save();
            return redirect()->route('college.index')->with('success', 'college created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function edit($id)
    {
        $college = college::findOrFail($id);
        return view('college::edit', compact('college'));
    }

    public function update(Request $request, $id)
    {
        $college =  College::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:500',
            'description' => "nullable",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {

            $college->title = $request->title;
            $college->description = $request->description;
            // $college->college_full_description = $request->college_full_description;
            // $college->meta_title = $request->meta_title;
            // $college->meta_keyword = $request->meta_keyword;
            // $college->meta_description = $request->meta_description;
            $college->publish = $request->publish ? 1 : 0;
            // $college->author = $request->author;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/college', $filename);
                $college->image = $path;
            }
            // if ($request->hasFile('college_inner_banner')) {
            //     $file = $request->college_inner_banner;
            //     $filename = time() . '.' . $file->getClientOriginalExtension();
            //     // $path = Storage::put('public/teams', $file, 'public');
            //     $path = $file->storeAs('public/college', $filename);
            //     $college->college_inner_banner = $path;
            // }
            $college->save();
            return redirect()->route('college.index')->with('success', 'college updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $college = College::findOrFail($id);
        $college->delete();
        return redirect()->route('college.index')->with('success', 'college deleted successfully');
    }
}
