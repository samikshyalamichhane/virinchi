<?php

namespace Modules\Aboutus\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Aboutus\Entities\Aboutus;


class AboutusController extends Controller
{
    public function index()
    {
        $aboutus = Aboutus::latest()->first();
        return view('aboutus::index', compact('aboutus'));
    }

    public function create()
    {
        return view('aboutus::create');
    }

    public function show($id)
    {
        return view('aboutus::show');
    }

    public function edit($id)
    {
        return view('aboutus::edit');
    }

    public function update(Request $request, $id)
    {
        $aboutus = Aboutus::latest()->first();
        $aboutus->mission_description = $request->mission_description;
        $aboutus->vision_description = $request->vision_description;
        $aboutus->about_us_description = $request->about_us_description;
        
        $aboutus->save();
        return redirect()->back()->with('success', 'Description saved successfully');
    }

}
