<?php

namespace Modules\Frontend\Http\Controllers;

use Illuminate\Contracts\Support\Renderable;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Modules\Club\Entities\Club;
use Modules\Gallery\Entities\ImageGallery;
use Modules\IctMela\Entities\IctMela;
use Modules\News\Entities\News;
use Modules\TechNews\Entities\TechNews;
use Modules\Testimonial\Entities\Testimonial;

class DefaultController extends Controller
{
    public function index(){
        $testimonials = Testimonial::where('publish', 1)->orderBy('created_at', 'DESC')->get();
        $news = TechNews::where('publish',1)->get();
        $events = News::where('publish',1)->get();
        return view('frontend::front.index',compact('testimonials','news','events'));
    }
    public function bict(){
        return view('frontend::front.bict');
    }
    public function mba(){
        return view('frontend::front.mba');
    }
    public function howToApply(){
        return view('frontend::front.howToApply');
    }
    public function college(){
        return view('frontend::front.college');
    }
    public function ictMela(){
        $details = IctMela::where('publish',1)->get();
        $gallery = ImageGallery::with('imagess')->where('slug','ict-mela')->first();
        return view('frontend::front.ictMela',compact('details','gallery'));
    }
    public function clubs(){
        $clubs = Club::published()->get();
        return view('frontend::front.clubs',compact('clubs'));
    }
    public function affiliation(){
        return view('frontend::front.affiliation');
    }
    public function aboutVirinchi(){
        return view('frontend::front.aboutVirinchi');
    }
    public function makeAppointment(){
        return view('frontend::front.make-appointment');
    }
    public function saveAppointment(Request $request){
        
        $today = Carbon::now()->format('Y-m-d');
        $this->validate($request,[
            'name'=>'required|string|max:254',
            'email'=>'required|email|max:254',
            'contact_number'=>'required',
            'date'=>'required|date_format:Y-m-d|after_or_equal:'.$today,
            'time'=>'required',
            'checkbox'=>'required',
        ],['checkbox.required'=>'Please check privacy policy chcekbox']);
        $data = [
            'name'=>$request->name,
            'email'=>$request->email,
            'contact_number'=>$request->contact_number,
            'date'=>$request->date,
            'program'=>$request->program,
            'time'=>$request->time,

        ];
        Mail::send('mail.appointment', $data, function ($message) use ($data,$request) {
            $message->to('admissions@virinchicollege.edu.np')->from($data['email'],$data['name'])->replyTo($data['email']);
                $message->subject('Appointment');   
            
        });
        return redirect()->back()->with('message','Message Sent Successfully');

        
    }
    
    public function smartByIntellect(){
        return view('frontend::front.smartByIntellect');
    }
    
    public function socialMediaHub(){
        return view('frontend::front.socialmediahub');
    }
    
    
    public function applyNow(){
        return view('frontend::front.applyNow');
    }
    public function techNews(){
        return view('frontend::front.techNews');
    }
    public function techNewsdetail($slug){
        $news = TechNews::where('slug',$slug)->first();
        $moreTechNews = TechNews::where('id','!=',$news->id)->get();
        return view('frontend::front.techNewsDetail',compact('news','moreTechNews'));
    }
    public function events(){
        $events = News::latest()->where('publish',1)->get();
        return view('frontend::front.eventsListing',compact('events'));
    }
    public function eventdetail($id){
        if($id==1){
            return view('frontend::front.event1');
        }
        if($id==2){
            return view('frontend::front.event2');   
        }
        if($id==3){
            return view('frontend::front.event3');
        }
        if($id==3){
            return view('frontend::front.event4');
        }
    }
    public function requestInfo(){
        return view('frontend::front.requestInfo');
    }
    public function saveRequestInfo(Request $request){
        $this->validate($request,['name'=>'required|string|max:255',
        'phone'=>'required',
        'email'=>'required|email',
        'program'=>'required',
        'start_time'=>'required|string',
        'parent_email'=>'required',
        'highest_level_of_education'=>'required|string',
        'how_did_you_hear_about_us'=>'required',
        'question'=>'nullable|string']
        ,['how_did_you_hear_about_us.required'=>'Please Enter where did you hear about us?']
        );

        $data = [
            'name' => $request->name,
            'phone' => $request->phone,
            'email' => $request->email,
            'program' => $request->program,
            'start_time' => $request->start_time,
            'highest_level_of_education' => $request->highest_level_of_education,
            'from_where_you_heard_about_us' => $request->from_where_you_heard_about_us,
            'question' => $request->question,
            
            
        ];

        Mail::send('mail.requestInfoEmail', $data, function ($message) use ($data,$request) {
            $message->to('admissions@virinchicollege.edu.np')->from($data['email'],$data['name'])->replyTo($data['email']);
                $message->subject('Request Info');   
            
        });
        return redirect()->back()->with('message','Message Sent Successfully');

    }
    public function saveApplicationForm(Request $request){
        $this->validate($request,['first_name'=>'required|string|max:255','last_name'=>'required|string|max:255',
        'middle_name'=>'string|max:255',
        'gender'=>'required|string|max:20',
        'dob'=>'required',
        'address'=>'required|string',
        'email'=>'required|email',
        'interested_course'=>'required',
        'year_applying_for'=>'required',
        'relation'=>'required',
        'guardian_first_name'=>'required|string|max:255',
        'guardian_last_name'=>'required|string|max:255',
        'guardian_contact'=>'required',
        'guardian_email'=>'required|email',
        'country_of_residence'=>'required',
        'country_address'=>'required']);

        $data = [
            'how_did_you_hear_about_us' => $request->how_did_you_hear_about_us,
            'specefic_question' => $request->specefic_question,
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'middle_name' => $request->middle_name,
            'gender' => $request->gender,
            'dob' => $request->dob,
            'address' => $request->address,
            'email' => $request->email,
            'current_grade' => $request->current_grade,
            'interested_course' => $request->interested_course,
            'year_applying_for' => $request->year_applying_for,
            'relation' => $request->relation,
            'guardian_first_name' => $request->guardian_first_name,
            'guardian_last_name' => $request->guardian_last_name,
            'guardian_middle_name' => $request->guardian_middle_name,
            'guardian_contact' => $request->guardian_contact,
            'guardian_email' => $request->guardian_email,
            'country_of_residence' => $request->country_of_residence,
            'country_address' => $request->country_address,
            
        ];

        Mail::send('mail.applicationForm', $data, function ($message) use ($data,$request) {
            $message->to('admissions@virinchicollege.edu.np')->from($data['email'])->replyTo($data['email']);
                $message->subject('Application Form');   
            
        });
        return redirect()->back()->with('message','Message Sent Successfully');
    }
    public function enrollmentForm(){
        return view('frontend::front.enrollmentForm');
    }
    public function saveEnrollMentForm(Request $request){
        $this->validate($request,['name'=>'required|string|max:255',
            'mobile_phone_no'=>'required',
            'email'=>'required|email',
            'father_name'=>'required|string|max:255',
            'father_contact_no'=>'nullable',
            'parent_email'=>'nullable|email|string',
            'mother_name'=>'required|string|max:255',
            'mother_contact_no'=>'nullable',
            'dob'=>'required',
            'secondary_education_pass_year'=>'nullable',
            'secondary_education_grade'=>'nullable',
            'higher_secondary_education_passed_year'=>'nullable',
            'higher_secondary_education_grade'=>'nullable'
        ]);

        $data = [
            'name' => $request->name,
            'mobile_phone_no' => $request->mobile_phone_no,
            'email' => $request->email,
            'father_name' => $request->father_name,
            'father_contact_no' => $request->father_contact_no,
            'parent_email' => $request->parent_email,
            'mother_name' => $request->mother_name,
            'mother_contact_no' => $request->mother_contact_no,
            'citizenship_or_passport_number' => $request->citizenship_or_passport_number,
            'dob' => $request->dob,
            'secondary_education_board' => $request->secondary_education_board,
            'secondary_education_school' => $request->secondary_education_school,
            'secondary_education_pass_year' => $request->secondary_education_pass_year,
            'secondary_education_grade' => $request->secondary_education_grade,
            'higher_secondary_education_board' => $request->higher_secondary_education_board,
            'higher_secondary_education_school' => $request->higher_secondary_education_school,
            'higher_secondary_education_passed_year' => $request->higher_secondary_education_passed_year,
            'higher_secondary_education_grade' => $request->higher_secondary_education_grade,
            'bachelor_degree_board' => $request->bachelor_degree_board,
            'bachelor_degree_college' => $request->bachelor_degree_college,
            'bachelor_degree_passed_year' => $request->bachelor_degree_passed_year,
            'bachelor_degree_grade' => $request->bachelor_degree_grade,
            'other_qualification_board' => $request->other_qualification_board,
            'other_qualification_college' => $request->other_qualification_college,
            'other_qualification_passed_year' => $request->other_qualification_passed_year,
            'other_qualification_grade' => $request->other_qualification_grade,
            
        ];

        Mail::send('mail.enrollmentFormEmail', $data, function ($message) use ($data,$request) {
            $message->to('admissions@virinchicollege.edu.np')->from($data['email'])->replyTo($data['email']);
                $message->subject('Enrollment Form');   
            
        });
        return redirect()->back()->with('message','Message Sent Successfully');

    }
    public function visitUs(){
        return view('frontend::front.visitUs');
    }
}