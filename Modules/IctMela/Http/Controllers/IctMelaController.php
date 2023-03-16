<?php

namespace Modules\IctMela\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\IctMela\Entities\IctMela;

class IctMelaController extends Controller
{

    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $details = IctMela::latest()->paginate(10000);
        return view('ictmela::index', compact('details'));
    }

    public function create()
    {
        return view('ictmela::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:500',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {
            $blog = new IctMela();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->image_description = $request->image_description;
            $blog->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/ictmela', $filename);
                $blog->image = $path;
            }
            
            $blog->save();
            return redirect()->route('ictmela.index')->with('success', 'Data created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('ictmela::show');
    }

    public function edit($id)
    {
        $ictmela = IctMela::findOrFail($id);
        return view('ictmela::edit',compact('ictmela'));
    }

    public function update(Request $request, $id)
    {
        $blog =  IctMela::findOrFail($id);
        $this->validate($request, [
            'title' => 'required|max:500',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {

            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->image_description = $request->image_description;
            $blog->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/ictmela', $filename);
                $blog->image = $path;
            }
            $blog->save();
            return redirect()->route('ictmela.index')->with('success', 'Data updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $blog = IctMela::findOrFail($id);
        $blog->delete();
        return redirect()->route('ictmela.index')->with('success', 'IctMela deleted successfully');
    }
}
