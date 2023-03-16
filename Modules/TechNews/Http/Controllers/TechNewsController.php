<?php

namespace Modules\TechNews\Http\Controllers;

use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\TechNews\Entities\TechNews;

class TechNewsController extends Controller
{
    use ValidatesRequests;
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $technewss = TechNews::orderBy('updated_at', 'desc')->paginate(10000);
        return view('technews::index', compact('technewss'));
    }


    public function create()
    {
        return view('technews::create');
    }


    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000',
            'technews_detail_banner' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000'
        ]);
        try {
            $technews = new TechNews;
            $technews->title = $request->title;
            $technews->description = $request->description;
            $technews->video = $request->video;
            $technews->meta_title = $request->meta_title;
            $technews->meta_keyword = $request->meta_keyword;
            $technews->meta_description = $request->meta_description;

            $technews->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '-image.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/technews', $filename);
                $technews->image = $path;
            }
            if ($request->hasFile('technews_detail_banner')) {
                $fileIcon = $request->technews_detail_banner;
                $fileIconname = time() . '-technews_detail_banner.' . $fileIcon->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $fileIcon, 'public');
                $pathIcon = $fileIcon->storeAs('public/technews', $fileIconname);
                $technews->technews_detail_banner = $pathIcon;
            }
            $technews->save();
            return redirect()->route('technews.index')->with('success', 'technews created successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }
    public function edit($id)
    {
        $technews = TechNews::findOrFail($id);
        return view('technews::edit', compact('technews'));
    }

    public function update(Request $request, $id)
    {
        $technews = TechNews::findOrFail($id);
        $this->validate($request, [
            'title' => 'required',
            'description' => "nullable",
            'image' => 'nullable|mimes:jpg,png,jpeg,gif,svg|max:2000'
        ]);
        try {
            $technews->title = $request->title;
            $technews->description = $request->description;
            $technews->video = $request->video;
            $technews->meta_title = $request->meta_title;
            $technews->meta_keyword = $request->meta_keyword;
            $technews->meta_description = $request->meta_description;
            $technews->publish = $request->publish ? 1 : 0;
            if ($request->hasFile('image')) {
                $file = $request->image;
                $filename = time() . '.' . $file->getClientOriginalExtension();
                $path = $file->storeAs('public/technews', $filename);
                $technews->image = $path;
            }
            if ($request->hasFile('technews_detail_banner')) {
                $fileIcon = $request->technews_detail_banner;
                $fileIconname = time() . '.' . $fileIcon->getClientOriginalExtension();
                // $path = Storage::put('public/teams', $fileIcon, 'public');
                $pathIcon = $fileIcon->storeAs('public/technews', $fileIconname);
                $technews->technews_detail_banner = $pathIcon;
            }
            $technews->save();
            return redirect()->route('technews.index')->with('success', 'technews updated successfully');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', $e->getMessage());
        }
    }

    public function destroy($id)
    {
        $technews = TechNews::findOrFail($id);
        $technews->delete();
        return redirect()->route('technews.index')->with('success', 'technews deleted successfully');
    }
}
