@extends('frontend::layouts.front')
@section('content')
<div class="banner noh">
   <div class="container">
      <div class="banner-wrapper">
         <h2>{{$page->title}}</h2>
      </div>
   </div>
</div>
<!-- Banner End -->
<main>
   <!-- Apply Start -->
   <div class="apply-inner">
      <div class="container">
         <div class="request-title same-text">
            <p>
               {!! $page->description !!}
               <!-- For more information from Virinchi, including invitations to upcoming admissions and events, please fill out this short form to tell us more about yourself and give us a chance to tell you more about us. -->
            </p>
         </div>
         <div class="applyonline-form">
         	@if(Session::has('message'))
         	<div class="alert alert-success alert-dismissible message">
         	    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         	        <span aria-hidden="true">&times;</span>
         	    </button>
         	    {!! Session::get('message') !!}
         	</div>
         	@endif
         	    @if (count($errors) > 0)
         	    <div class="alert alert-danger message">
         	        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
         	            <span aria-hidden="true">&times;</span>
         	        </button>
         	        <ul>
         	            @foreach($errors->all() as $error)
         	            <li>{{$error}}</li>
         	            @endforeach
         	        </ul>
         	    </div>
         	    @endif
            <form action="{{route('saveRequestInfo')}}" method="POST">
            	{{csrf_field()}}
               <div class="row">
                  <div class="form-group col-md-6 col-12">
                     <label for="name" class="bold-label">NAME <strong>*</strong></label>
                     <input type="text" class="form-control" id="name" name="name">
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6 col-12">
                     <label for="phone" class="bold-label">PHONE<strong>*</strong></label>
                     <input type="tel" class="form-control" id="phone" name="phone">
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6 col-12">
                     <label for="email" class="bold-label">EMAIL<strong>*</strong></label>
                     <input type="email" class="form-control" id="email" name="email">
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6 col-12">
                     <label class="bold-label">WHAT PROGRAM ARE YOU INTERESTED IN? <strong>*</strong></label>
                     <select name="program" id="" class="form-control fm-default">
                        <option value="">-- Select One --</option>
                        <option value="BICT">BICT</option>
                        <option value="MBA">MBA</option>
                     </select>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6 col-12">
                     <label class="bold-label">WHEN WOULD YOU LIKE TO START AT VIRINCHI? <strong>*</strong></label>
                     <select name="start_time" id="" class="form-control fm-default">
                        <option value="">-- Select One --</option>
                        <!--<option value="Immediately">Immediately</option>-->
                        <!--<option value="After Result">After Result</option>-->
                        <option value="Immediately">2023 Spring Intake</option>
                        <option value="After Result">2023 Fall Intake</option>
                        <option value="Immediately">2024 Spring Intake</option>
                        <option value="After Result">2024 Fall Intake </option>
                        <option value="Immediately">2025 Spring Intake</option>
                        <option value="After Result">2025 Fall Intake</option>
                     </select>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6 col-12">
                     <label class="bold-label">HIGHEST LEVEL OF EDUCATION ACHIEVED <strong>*</strong></label>
                     <select name="highest_level_of_education" id="" class="form-control fm-default">
                        <option value="">-- Select One --</option>
                        <option value="I am currently in high school">I am currently in high school</option>
                        <option value="I am in Grade 10">I am in Grade 10</option>
                        <option value="I am in Grade 11">I am in Grade 11</option>
                        <option value="I am in Grade 12">I am in Grade 12</option>
                        <option value="I have completed bachelor’s degree">I have completed bachelor’s degree</option>
                     </select>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6 col-12">
                     <label class="bold-label">HIGH SCHOOL OR COLLEGE NAME <strong>*</strong></label>
                     <input type="text" class="form-control" id="" placeholder="" name="high_school">
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6 col-12 hear">
                     <label class="bold-label">FROM WHERE YOU HEARD ABOUT US? <strong>*</strong></label>
                     <select name="how_did_you_hear_about_us" id="" class="form-control fm-default">
                        <option value="">-- Select One --</option>
                        <option value="I am currently in high school">Social Media</option>
                        <option value="I am in Grade 10">Friends</option>
                        
                        <option value="I am in Grade 12">Advertisements</option>
                        <option value="I am in Grade 12">Others</option>
                        
                     </select>
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-6 col-12">
                     <label for="place" class="bold-label">QUESTION</label>
                     <textarea name="question" id="" cols="30" rows="1" class="form-control"></textarea>
                  </div>
               </div>
               <div class="applyonline-footer button-wrapper nbw">
                  <!-- <div class="button-wrapper"> -->
                  <button type="submit" class="btn primary-btn">Submit</button>
                  <!-- <a class="btn primary-btn" href="#">Submit</a> -->
                  <!--<a class="btn grey-btn" href="visit-us.php">Visit Us</a>-->
                  <!-- </div> -->
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Apply End -->
   <div class="scope vc" id="scope">
      <div class="container">
         <div class="row">
            <div class="col-lg-5 col-md-7 col-12">
               <div class="scope-content appp">
                  <h3 class="course-title">Visit College</h3>
                  <p class="mb-4">
                     {!! $dashboard_site->visit_college_info !!}
                     <!-- A campus visit is the best way to see yourself at Virinchi. Tour the campus, attend an information session, and meet with an admissions counselor. We want you to experience how Virinchi College opens doors to opportunity. -->
                  </p>
                  <!-- <p class="visitor">We welcome visitors</p>
                  <p>Every <b>SUNDAY</b> to <b>FRIDAY</b>   9:00 am to 4:00 pm </p> -->
                  <div class="ap">
                     <a class="btn primary-btn" href="{{route('makeAppointment')}}">Make an Appointment</a></a>
                  </div>
               </div>
            </div>
            <div class="col-md-5 mt-5 mb-4">
               <!--    <div class="scope-content text-center ap">-->
               <!-- <a class="btn primary-btn" href="make-an-appointment.php">Make an Appointment</a></a>-->
               <!--</div>-->
            </div>
            <!--<div class="scope-img">-->
            <!--  <img src="assets/img/scope.jpg" alt="" class="img-fluid">-->
            <!--</div>-->
         </div>
      </div>
   </div>
   <div class="contact-information mb-5" id="newcontact">
      <div class="container">
         <div class="row">
            <div class="col-md-6">
               <h5>CONTACT INFORMATION</h5>
               <!-- <h2>Office of Admissions</h2> -->
               {!! $dashboard_site->contact_info_desc !!}
            </div>
            <div class="col-md-6">
               <div class="bottom-aligner">
                  <ul>
                     <li><a href="#"><i class="fa fa-envelope"></i>{{$dashboard_site->admission_email}}</a></li>
                     <li><a href="#"><i class="fa fa-phone"></i>{{$dashboard_site->admission_contact}}</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact us Start -->
   <!--<div class="full_width_callouts">-->
   <!--    <div class="contact_block">-->
   <!--        <div class="contact_block_inner">-->
   <!--            <div class="container">-->
   <!--                <div class="contact_block_wrapper">-->
   <!--                    <div class="contact_wrapper">-->
   <!--                        <div class="contact_header">-->
   <!--                            <div class="contact_types">-->
   <!--                                <span class="contact_heading_label">OFFICE OF ADMISSIONS</span>-->
   <!--                                <h2 class="contact_name" itemprop="name">-->
   <!--                                    <span class="contact_name_label">Meet the admission COUNSELOR</span>-->
   <!--                                </h2>-->
   <!--                                <p class="contact_info">-->
   <!--                                    We are looking forward to meeting you! Our admissions counselors are here to answer your questions-->
   <!--                                    and guide you through each step of the admissions process. You also can reach the Admissions Office by-->
   <!--                                    calling-->
   <!--                                </p>-->
   <!--                            </div>-->
   <!--                            <div class="contact_types_header">-->
   <!--                                <a class="contact_type contact_type_link contact_type_email" href="mailto:admissions@muhlenberg.edu">-->
   <!--                                    <span class="contact_type_label">-->
   <!--                                        <span class="contact_type_label_icon">-->
   <!--                                            <i class="fa fa-envelope"></i>-->
   <!--                                        </span>-->
   <!--                                    </span>-->
   <!--                                    <span class="contact_type_description" itemprop="email">admissions@virinchicollege.edu.np</span>-->
   <!--                                </a>-->
   <!--                                <a class="contact_type contact_type_link contact_type_phone" href="tel:484-664-3200">-->
   <!--                                    <span class="contact_type_label">-->
   <!--                                        <span class="contact_type_label_icon">-->
   <!--                                            <i class="fa fa-phone"></i>-->
   <!--                                        </span>-->
   <!--                                    </span>-->
   <!--                                    <span class="contact_type_description" itemprop="telephone">01-5553396, 9863253481</span>-->
   <!--                                </a>-->
   <!--                            </div>-->
   <!--                        </div>-->
   <!--                        <div class="contact_body">-->
   <!--                            <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14133.769573369373!2d85.3184824!3d27.6727186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x66d083a187176a11!2sVirinchi%20College-%20Kumaripati!5e0!3m2!1sen!2snp!4v1665763828414!5m2!1sen!2snp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>-->
   <!--                        </div>-->
   <!--                    </div>-->
   <!--                </div>-->
   <!--            </div>-->
   <!--        </div>-->
   <!--    </div>-->
   <!--</div>-->
   <div class="contact-border" id="map">
      <div class="newcontact">
         <div class="container">
            <div class="row">
               <div class="col-md-7">
                  <!--<img src="assets/img/google-maps-highlight 1.png" alt="" class="img-fluid"> -->
                  <iframe src="{!! $dashboard_site->map !!}" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
               </div>
               <div class="col-md-5 dir">
                  <h2>Directions</h2>
                  {!! $dashboard_site->direction_desc !!}
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact us End -->
</main>
@endsection