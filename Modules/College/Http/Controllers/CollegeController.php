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
            'graduate_on_time' => 'nullable|max:500',
            'description' => "nullable",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {
            $college = new College;
            $college->graduate_on_time = $request->graduate_on_time;
            $college->industry_readiness = $request->industry_readiness;
            $college->graduate_employed = $request->graduate_employed;
            $college->education_model_description = $request->education_model_description;
            // $college->meta_description = $request->meta_description;
            
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
            'graduate_on_time' => 'nullable|max:500',
            'description' => "nullable",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {

            $college->graduate_on_time = $request->graduate_on_time;
            $college->industry_readiness = $request->industry_readiness;
            $college->graduate_employed = $request->graduate_employed;
            $college->education_model_description = $request->education_model_description;
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
