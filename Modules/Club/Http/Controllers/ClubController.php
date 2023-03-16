<?php

namespace Modules\Club\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Club\Entities\Club;

class ClubController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $details = Club::latest()->paginate(10000);
        return view('club::index', compact('details'));
    }

    public function create()
    {
        return view('club::create');
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required|max:500',
            'description' => "required",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:5000'
        ]);
        try {
            $blog = new Club();
            $blog->title = $request->title;
            $blog->description = $request->description;
            $blog->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/clubs', $filename);
                $blog->image = $path;
            }
            
            $blog->save();
            return redirect()->route('club.index')->with('success', 'Club created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function show($id)
    {
        return view('club::show');
    }

    public function edit($id)
    {
        $club = Club::findOrFail($id);
        return view('club::edit',compact('club'));
    }

    public function update(Request $request, $id)
    {
        $blog =  Club::findOrFail($id);
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
            $blog->author = $request->author;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $file, 'public');
                $path = $file->storeAs('public/clubs', $filename);
                $blog->image = $path;
            }
            $blog->save();
            return redirect()->route('club.index')->with('success', 'Data updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $blog = Club::findOrFail($id);
        $blog->delete();
        return redirect()->route('club.index')->with('success', 'Clubs deleted successfully');
    }
}
