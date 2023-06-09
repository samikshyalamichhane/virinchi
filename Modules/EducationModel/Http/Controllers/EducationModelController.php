<?php

namespace Modules\EducationModel\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\EducationModel\Entities\EducationModel;

class EducationModelController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    
    public function index()
    {
        $details = EducationModel::latest()->paginate(10000);
        return view('educationmodel::index', compact('details'));
    }

    public function create()
    {
        return view('educationmodel::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:500',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {
            $blog = new EducationModel();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/education-models', $filename);
                $blog->image = $path;
            }
            
            $blog->save();
            return redirect()->route('education-model.index')->with('success', 'Education Model created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('educationmodel::show');
    }

    public function edit($id)
    {
        $club = EducationModel::findOrFail($id);
        return view('educationmodel::edit',compact('club'));
    }

    public function update(Request $request, $id)
    {
        $blog =  EducationModel::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:500',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {

            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/education-models', $filename);
                $blog->image = $path;
            }
            $blog->save();
            return redirect()->route('education-model.index')->with('success', 'Education Model updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $blog = EducationModel::findOrFail($id);
        $blog->delete();
        return redirect()->route('education-model.index')->with('success', 'Education Model deleted successfully');
    }
}
