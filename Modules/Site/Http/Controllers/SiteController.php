<?php

namespace Modules\Site\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Site\Entities\About;
use Modules\Site\Entities\Banner;
use Modules\Site\Entities\Mission;
use Modules\Site\Entities\OpeningHour;
use Modules\Site\Entities\Site;

class SiteController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $site = Site::latest()->first();
        return view('site::index', compact('site'));
    }

    public function create()
    {
        return view('site::create');
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        return view('site::show');
    }

    public function edit($id)
    {
        return view('site::edit');
    }

    public function update(Request $request, $id)
    {
        $site = Site::latest()->first();
        $site->title = $request->title;
        $site->description = $request->description;
        $site->meta_title = $request->meta_title;
        $site->meta_keyword = $request->meta_keyword;
        $site->working_exp = $request->working_exp;
        $site->projects_completed = $request->projects_completed;
        $site->happy_clients = $request->happy_clients;
        $site->training_and_workshop = $request->training_and_workshop;

        $site->email1 = $request->email1;
        $site->contact1 = $request->contact1;
        $site->map = $request->map;
        $site->footer_desc = $request->footer_desc;

        $site->facebook = $request->facebook;
        $site->youtube = $request->youtube;
        $site->twitter = $request->twitter;
        $site->linkedin = $request->linkedin;
        $site->instagram = $request->instagram;
        $site->tiktok = $request->tiktok;

        $site->application_fee_desc = $request->application_fee_desc;
        $site->application_fee = $request->application_fee;
        
        
        $site->address = $request->address;
        $site->home_title = $request->home_title;
        $site->home_short_desc = $request->home_short_desc;
        $site->home_image_desc = $request->home_image_desc;
        $site->home_program_desc = $request->home_program_desc;
        $site->uni_desc = $request->uni_desc;
        
        

        $site->contact_info_desc = $request->contact_info_desc;
        $site->direction_desc = $request->direction_desc;
        $site->admission_email = $request->admission_email;
        $site->admission_contact = $request->admission_contact;
        $site->visit_college_info = $request->visit_college_info;
        $site->appointment_desc = $request->appointment_desc;
        $site->visit_schedule = $request->visit_schedule;
        $site->off_admission_desc = $request->off_admission_desc;
        $site->uni_video_link = $request->uni_video_link;
        


        if ($request->hasFile('header_logo')) {
            $file = $request->header_logo;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/site', $filename);
            $site->header_logo = $path;
        }
        
        if ($request->hasFile('home_banner_image')) {
            $file = $request->home_banner_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/site', $filename);
            $site->home_banner_image = $path;
        }
        if ($request->hasFile('uni_image')) {
            $file = $request->uni_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/site', $filename);
            $site->uni_image = $path;
        }
        if ($request->hasFile('qr_image')) {
            $file = $request->qr_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/site', $filename);
            $site->qr_image = $path;
        }
        if ($request->hasFile('footer_logo')) {
            $file = $request->footer_logo;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/site', $filename);
            $site->footer_logo = $path;
        }
        if ($request->hasFile('fav_icon')) {
            $file = $request->fav_icon;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/site', $filename);
            $site->fav_icon = $path;
        }
        if ($request->hasFile('page_banner_image')) {
            $file = $request->page_banner_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/site', $filename);
            $site->page_banner_image = $path;
        }

        if ($request->hasFile('about_us_image')) {
            $file = $request->about_us_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/site', $filename);
            $site->about_us_image = $path;
        }

        if ($request->hasFile('why_choose_us_image')) {
            $file = $request->why_choose_us_image;
            $filename = rand(10, 100) . time() . '.' . $file->getClientOriginalExtension();
            $path = $file->storeAs('public/site', $filename);
            $site->why_choose_us_image = $path;
        }
        $site->save();
        return redirect()->back()->with('success', 'Site saved successfully');
    }

}
