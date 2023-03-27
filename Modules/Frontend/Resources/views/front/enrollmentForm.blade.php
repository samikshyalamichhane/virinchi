@extends('frontend::layouts.front')
@section('content')
<div class="banner noh">
   <div class="container">
      <div class="banner-wrapper">
         <h2>Enrollment Form</h2>
      </div>
   </div>
</div>
<nav aria-label="breadcrumb">
    
 <ol class="breadcrumb">
 <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
<li class="breadcrumb-item"><a href="#">Apply Online</a></li>
 <li class="breadcrumb-item active" aria-current="page">Enrollment Form</li>
</ol>

</nav>
<!-- Banner End -->
<main>
   <!-- Apply Start -->
   <div class="apply-inner">
      <div class="container">
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
            <form action="{{route('saveEnrollmentForm')}}" method="POST">
            	{{csrf_field()}}
               <h4 class="applyonline-form-title">Student Information</h4>
               <span>"Name" should be the legal name as it appears on legal documents.</span>
               <div class="row">
                  <div class="form-group col-md-4 col-12">
                     <label for="firstname" class="bold-label">Name of the student <strong>*</strong></label>
                     <input type="text" class="form-control" id="firstname" placeholder="Write here" name="name"> 
                  </div>
                  <div class="form-group col-md-4 col-12">
                     <label for="lastname" class="bold-label">Mobile phone no <strong>*</strong></label>
                     <input type="number" class="form-control" id="lastname" placeholder="Write here" name="mobile_phone_no">
                  </div>
                  <div class="form-group col-md-4 col-12">
                     <label for="preferredname" class="bold-label">Email ID<strong>*</strong></label>
                     <input type="email" class="form-control" id="preferredname" placeholder="Write here" name="email">
                  </div>
               </div>
               <div class="row">
                  <div class="form-group col-md-4 col-12">
                     <label for="firstname" class="bold-label">Father’s name <strong>*</strong></label>
                     <input type="text" class="form-control" id="firstname" placeholder="Write here" name="father_name">
                  </div>
                  <div class="form-group col-md-4 col-12">
                     <label for="preferredname" class="bold-label">Father’s Contact No</label>
                     <input type="number" class="form-control" id="preferredname" placeholder="Write here" name="father_contact_no">
                  </div>
                  <div class="form-group col-md-4 col-12">
                     <label for="preferredname" class="bold-label">Parent’s Email ID</label>
                     <input type="email" class="form-control" id="preferredname" placeholder="Write here" name="parent_email">
                  </div>
                  <div class="form-group col-md-4 col-12">
                     <label for="lastname" class="bold-label">Mother’s name <strong>*</strong></label>
                     <input type="text" class="form-control" id="lastname" placeholder="Write here" name="mother_name">
                  </div>
                  <div class="form-group col-md-4 col-12">
                     <label for="preferredname" class="bold-label">Mother’s Contact No</label>
                     <input type="number" class="form-control" id="preferredname" placeholder="Write here" name="mother_contact_no">
                  </div>
                  <div class="form-group col-md-4 col-12">
                     <label for="preferredname" class="bold-label">Citizenship / Passport Number</label>
                     <input type="number" class="form-control" id="preferredname" placeholder="Write here" name="citizenship_or_passport_number">
                  </div>
                  <div class="form-group col-md-4 col-12">
                     <label for="preferredname" class="bold-label">Date of Birth(Day/Month/Year)*<strong>*</strong></label>
                     <input type="date" class="form-control" id="preferredname" placeholder="Write here" name="dob">
                  </div>
               </div>
               <br>
               <h4 class="applyonline-form-title">Educational Quilification</h4>
               <h5>Secondary Education</h5>
               <div class="row mt-4">
                  <div class="form-group col-md-6 col-12">
                     <label for="firstname" class="bold-label">Board</label>
                     <input type="text" class="form-control" id="firstname" placeholder="Write here" name="secondary_education_board">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="lastname" class="bold-label">Schoool</label>
                     <input type="text" class="form-control" id="lastname" placeholder="Write here" name="secondary_education_school">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="preferredname" class="bold-label">Passed Year</label>
                     <input type="date" class="form-control" id="preferredname" placeholder="Write here" name="secondary_education_pass_year">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="preferredname" class="bold-label">Grade/ Score</label>
                     <input type="text" class="form-control" id="preferredname" placeholder="Write here" name="secondary_education_grade">
                  </div>
               </div>
               <br><br>
               <h5>Higher Secondary Education</h5>
               <div class="row mt-4">
                  <div class="form-group col-md-6 col-12">
                     <label for="firstname" class="bold-label">Board</label>
                     <input type="text" class="form-control" id="firstname" placeholder="Write here" name="higher_secondary_education_board">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="lastname" class="bold-label">School/College</label>
                     <input type="text" class="form-control" id="lastname" placeholder="Write here" name="higher_secondary_education_school">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="preferredname" class="bold-label">Passed Year</label>
                     <input type="date" class="form-control" id="preferredname" placeholder="Write here" name="higher_secondary_education_passed_year">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="preferredname" class="bold-label">Grade/ Score</label>
                     <input type="text" class="form-control" id="preferredname" placeholder="Write here" name="higher_secondary_education_grade">
                  </div>
               </div>
               <br><br>
               <h5>Bachelor Degree</h5>
               <div class="row mt-4">
                  <div class="form-group col-md-6 col-12">
                     <label for="firstname" class="bold-label">Board</label>
                     <input type="text" class="form-control" id="firstname" placeholder="Write here" name="bachelor_degree_board">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="lastname" class="bold-label">College/Institute</label>
                     <input type="text" class="form-control" id="lastname" placeholder="Write here" name="bachelor_degree_college">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="preferredname" class="bold-label">Passed Year</label>
                     <input type="date" class="form-control" id="preferredname" placeholder="Write here" name="bachelor_degree_passed_year">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="preferredname" class="bold-label">Grade/ Score</label>
                     <input type="text" class="form-control" id="preferredname" placeholder="Write here" name="bachelor_degree_grade">
                  </div>
               </div>
               <br><br>
               <h5>Any  Other Quilification</h5>
               <div class="row mt-4">
                  <div class="form-group col-md-6 col-12">
                     <label for="firstname" class="bold-label">Board</label>
                     <input type="text" class="form-control" id="firstname" placeholder="Write here" name="other_qualification_board">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="lastname" class="bold-label">College/Institute</label>
                     <input type="text" class="form-control" id="lastname" placeholder="Write here" name="other_qualification_college">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="preferredname" class="bold-label">Passed Year</label>
                     <input type="date" class="form-control" id="preferredname" placeholder="Write here" name="other_qualification_passed_year">
                  </div>
                  <div class="form-group col-md-6 col-12">
                     <label for="preferredname" class="bold-label">Grade/ Score</label>
                     <input type="text" class="form-control" id="preferredname" placeholder="Write here" name="other_qualification_grade">
                  </div>
               </div>
               <div class="applyonline-footer button-wrapper nbw">
                  <!-- <div class="button-wrapper"> -->
                  	<button type="submit" class="btn btn-primary">Submit Form</button>
                  <!-- <a class="btn primary-btn" href="#test-form">Submit Form</a> -->
                  <!-- </div> -->
               </div>
            </form>
         </div>
      </div>
   </div>
   <!-- Apply End -->
   <!-- Contact us Start -->
   <div class="full_width_callouts">
      <div class="contact_block">
         <div class="contact_block_inner">
            <div class="container">
               <div class="contact_block_wrapper">
                  <div class="contact_wrapper">
                     <div class="contact_header">
                        <div class="contact_types">
                           <span class="contact_heading_label">OFFICE OF ADMISSIONS</span>
                           {!! $dashboard_site->off_admission_desc !!}
                           <!-- <h2 class="contact_name" itemprop="name">
                              <span class="contact_name_label">Meet the admission COUNSELOR</span>
                           </h2>
                           <p class="contact_info">
                              We are looking forward to meeting you! Our admissions counselors are here to answer your questions
                              and guide you through each step of the admissions process. You also can reach the Admissions Office by
                              calling
                           </p> -->
                        </div>
                        <div class="contact_types_header">
                           <a class="contact_type contact_type_link contact_type_email" href="mailto:{{$dashboard_site->admission_email}}">
                           <span class="contact_type_label">
                           <span class="contact_type_label_icon">
                           <i class="fa fa-envelope"></i>
                           </span>
                           </span>
                           <span class="contact_type_description" itemprop="email">{{$dashboard_site->admission_email}}</span>
                           </a>
                           <a class="contact_type contact_type_link contact_type_phone" href="tel:484-664-3200">
                           <span class="contact_type_label">
                           <span class="contact_type_label_icon">
                           <i class="fa fa-phone"></i>
                           </span>
                           </span>
                           <span class="contact_type_description" itemprop="telephone">{{$dashboard_site->admission_contact}}</span>
                           </a>
                        </div>
                     </div>
                     <div class="contact_body">
                        <iframe src="{{$dashboard_site->map}}" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact us End -->
</main>
@endsection