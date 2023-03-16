<?php

namespace Modules\Frontend\Http\Controllers;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Site\Entities\Site;
use Modules\Slider\Entities\Slider;
use Modules\Testimonial\Entities\Testimonial;
use Modules\Contactus\Entities\Contactus;
use Modules\Frontend\Entities\Subscribe;
use Modules\Machine\Entities\Machine;
use Modules\Project\Entities\Project;

class FrontendController extends Controller
{
    public $info;
    use ValidatesRequests;

    public function __construct()
    {
        $this->info = Site::latest()->first();
    }

    public function index()
    {
        $site = Site::latest()->first();
        $testimonials = Testimonial::where('publish', 1)->orderBy('created_at', 'DESC')->get();
        // $sliders = Slider::where('publish', 1)->orderBy('created_at', 'DESC')->get();
        // $projects = Project::where('publish', 1)->orderBy('created_at', 'DESC')->take(4)->get();
        // $machines = Machine::where('publish', 1)->orderBy('created_at', 'DESC')->take(8)->get();
        // return view('frontend::index', compact('testimonials', 'site', 'sliders','projects','machines'));
        return view('frontend::index',compact('testimonials'));
    }

    public function about()
    {
        $site  = Site::latest()->first();
        return view('frontend::about', compact('site'));
    }

    public function projects()
    {
        $projects = Project::where('publish', 1)->orderBy('created_at', 'ASC')->latest()->paginate(10);
        return view('frontend::projects', compact('projects'));
    }

    public function machines()
    {
        $machines = Machine::where('publish', 1)->orderBy('created_at', 'ASC')->latest()->paginate(10);
        return view('frontend::machines', compact('machines'));
    }

    public function projectsDetail($slug)
    {
        $project = Project::where('slug', $slug)->with('projectGalleries')->firstOrFail();
        return view('frontend::projectsdetail', compact('project'));
    }
    
    public function machineDetail($slug)
    {
        $machine = Machine::where('slug', $slug)->firstOrFail();
        return view('frontend::machinesdetail', compact('machine'));
    }

    public function contact()
    {
        $site  = Site::latest()->first();
        return view('frontend::contact', compact('site'));
    }

    public function contactUs(Request $request)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'message' => 'required'
        ]);
        try {
            $all = $request->except(['Contact']);
            $all['type'] = 'Contact';
            Contactus::create($all);
            $notification = array(
                'message' => 'Message Send Successfully',
                'alert-type' => 'success'
            );
            // Mail::send('mail.contact', $all, function ($sender) use ($all) {
            //     $sender->from($all['email'], '');
            //     $sender->to($this->info->email1, 'demo@mail.com');
            // });
            return redirect()->back()->with('success','Enquiry Sent Successfully.');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Something Went Wrong! Please try again later');
        }
    }

    public function subscribe(Request $request)
    {
        if($request->isMethod('post'))
        {
            $data = $request->all();
            $this->validate($request, [
                'email' => 'required|email',
            ]);

            $subscribeCountCount = Subscribe::where('email',$data['email'])->count();
            if($subscribeCountCount>0){
                $message = "You have alredy subscribed!";
                $notification = array(
                    'message' => $message,
                    'alert-type' => 'info'
                );
                return redirect()->back()->with($notification);
            }else{
                //Register the Subscribe
                $user = new Subscribe;
                $user->email = $data['email'];
                $user->save();

                //Redirect back with success message
                $message = "Subscribed Successfully";
                $notification = array(
                    'message' => $message,
                    'alert-type' => 'success'
                );
                return redirect()->back()->with($notification);
            }
        }
    }

    public function dynamicPages($slug)
    {
        abort(404);
    }

}
