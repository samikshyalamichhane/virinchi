@extends('frontend::layouts.front')
@section('content')
<div class="banner">
         <div class="container">
            <div class="banner-wrapper">
               <h2>Apply</h2>
            </div>
         </div>
      </div>
      <!-- Banner End -->
      <main>
         <!-- Apply Start -->
         <div class="apply-inner">
            <div class="container">
               <div class="inner-title">
                  <!-- <h3 class="course-title">How <span>to Apply</span></h3> -->
                  <p>
                     Our admissions counselors are here to answer your questions and guide you through each step of the application process.
                  </p>
                  <p>
                     You also can reach the Admissions Office by calling <a href="tel:01-5553396" class="mail">01-5553396</a>,
                     <a href="tel:9863253481" class="mail">9863253481</a> or emailing <a href="mailto:admissions@virinchicollege.edu.np" class="mail">admissions@virinchicollege.edu.np</a>
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
                  <form action="{{route('saveApplicationForm')}}" method="POST">
                     <!-- <div class="row"> -->
                        {{csrf_field()}}
                     <div class="form-group col-md-3 col-12 pl-0">
                        <label for="name" class="small-label">HOW DID YOU HEAR ABOUT US?</label>
                        <select name="how_did_you_hear_about_us" id="" class="form-control">
                           <option value="None Specified">None Specified</option>
                           <option value="Friend/College">Friend/College</option>
                           <option value="Website">Website</option>
                           <option value="Social Media">Social Media</option>
                        </select>
                     </div>
                     <div class="pb-4 form-group col-12 pl-0">
                        <label for="name" class="small-label">PLEASE USE THE BOX BELOW TO ASK A SPECIFIC QUESTION OR TELL US MORE INFORMATION ABOUT YOUR CURRENT SITUATION:</label>
                        <textarea name="specefic_question" id="" cols="30" rows="3" class="form-control"></textarea>
                     </div>
                     <h4 class="applyonline-form-title">Student Information</h4>
                     <span>"Name" should be the legal name as it appears on legal documents.</span>
                     <div class="row">
                        <div class="form-group col-md-4 col-12">
                           <label for="firstname" class="bold-label">FIRST NAME <strong>*</strong></label>
                           <input type="text" class="form-control" id="firstname" name="first_name">
                        </div>
                        <div class="form-group col-md-4 col-12">
                           <label for="lastname" class="bold-label">LAST NAME <strong>*</strong></label>
                           <input type="text" class="form-control" id="lastname" name="last_name">
                        </div>
                        <div class="form-group col-md-4 col-12">
                           <label for="preferredname" class="bold-label">MIDDLE NAME</label>
                           <input type="text" class="form-control" id="preferredname" name="middle_name">
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-12 applyonline-form-radio">
                           <p class="bold-label">Gender <strong>*</strong></p>
                           <input type="radio" id="male" value="Male" name="gender" checked >
                           <label for="male">Male</label>
                           <input type="radio" id="female" value="Female" name="gender">
                           <label for="female">Female</label>
                           <input type="radio" id="nonbinary" value="Nonbinary" name="gender">
                           <label for="nonbinary">Nonbinary</label>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-4 col-12">
                           <label for="dob" class="bold-label">DATE OF BIRTH<strong>*</strong></label>
                           <input type="date" class="form-control" id="dob" name="dob">
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6 col-12">
                           <label for="place" class="bold-label">ADDRESS<strong>*</strong></label>
                           <input type="text" class="form-control" id="place" name="address">
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-6 col-12">
                           <label class="small-label">CANDIDATE'S EMAIL</label>
                           <span>
                           For applicants applying please enter valid and true email address.
                           </span>
                           <input type="email" class="form-control" name="email">
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-4 col-12">
                           <label class="small-label">CURRENT GRADE</label>
                           <span>
                           Please choose the current grade level of your.
                           </span>
                           <select name="current_grade" id="" class="form-control fm-default">
                              <option value="">-- Select One --</option>
                              <option value="Grade 10">Grade 10</option>
                              <option value="Grade 11">Grade 11</option>
                              <option value="Grade 12">Grade 12</option>
                              <!-- <option value=""></option> -->
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-4 col-12">
                           <label class="bold-label">COURSE INTERESTED IN APPLYING FOR <strong>*</strong></label>
                           <select name="interested_course" id="" class="form-control fm-default">
                              <option value="">-- Select One --</option>
                              <option value="BICT">BICT</option>
                              <option value="MBA">MBA</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-4 col-12">
                           <label class="bold-label">YEAR APPLYING FOR <strong>*</strong></label>
                           <select name="year_applying_for" id="" class="form-control fm-default">
                              <option value="">-- Select One --</option>
                              <option value="2022-2023">2022-2023</option>
                           </select>
                        </div>
                     </div>
                     <h4 class="applyonline-form-title">Guardian's Information</h4>
                     <div class="row">
                        <div class="form-group col-md-4 col-12">
                           <label class="bold-label">RELATION <strong>*</strong></label>
                           <select name="relation" id="" class="form-control fm-default">
                              <option value="">-- Select One --</option>
                              <option value="Father">Father</option>
                              <option value="Mother">Mother</option>
                              <option value="Sister">Sister</option>
                              <option value="Brother">Brother</option>
                              <option value="Aunt">Aunt</option>
                              <option value="Uncle">Uncle</option>
                           </select>
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-4 col-12">
                           <label for="guardianfirstname" class="bold-label">FIRST NAME <strong>*</strong></label>
                           <input type="text" class="form-control" id="guardianfirstname" name="guardian_first_name">
                        </div>
                        <div class="form-group col-md-4 col-12">
                           <label for="guardianlastname" class="bold-label">LAST NAME <strong>*</strong></label>
                           <input type="text" class="form-control" id="guardianlastname" name="guardian_last_name">
                        </div>
                        <div class="form-group col-md-4 col-12">
                           <label for="guardiancontact" class="bold-label">MIDDLE NAME </label>
                           <input type="text" class="form-control" id="guardiancontact" name="guardian_middle_name">
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-4 col-12">
                           <label for="guardiancontact" class="bold-label">CONTACT NUMBER <strong>*</strong></label>
                           <input type="text" class="form-control" id="guardiancontact" name="guardian_contact">
                        </div>
                        <div class="form-group col-md-6 col-12">
                           <label for="guardianemail" class="bold-label">EMAIL <strong>*</strong></label>
                           <input type="email" class="form-control" name="guardian_email">
                        </div>
                     </div>
                     <div class="row">
                        <div class="form-group col-md-4 col-12">
                           <label class="bold-label">COUNTRY OF RESIDENCE <strong>*</strong></label>
                           <select name="country_of_residence" id="" class="form-control fm-default">
                              <option value="">-- None Spedcified --</option>
                              <option value="Japan">Japan</option>
                              <option value="Nepal">Nepal</option>
                           </select>
                        </div>
                        <div class="form-group col-md-6 col-12">
                           <label for="guardianaddress" class="bold-label">ADDRESS <strong>*</strong></label>
                           <input type="text" class="form-control" name="country_address">
                        </div>
                     </div>
                     <div class="applyonline-footer">
                        <!-- <div class="button-wrapper"> -->
                        <button class="btn btn-primary" type="submit">Submit Form</button>
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
                                 <h2 class="contact_name" itemprop="name">
                                    <span class="contact_name_label">Meet the admission COUNSELOR</span>
                                 </h2>
                                 <p class="contact_info">
                                    We are looking forward to meeting you! Our admissions counselors are here to answer your questions
                                    and guide you through each step of the admissions process. You also can reach the Admissions Office by
                                    calling
                                 </p>
                              </div>
                              <div class="contact_types_header">
                                 <a class="contact_type contact_type_link contact_type_email" href="mailto:admissions@muhlenberg.edu">
                                 <span class="contact_type_label">
                                 <span class="contact_type_label_icon">
                                 <i class="fa fa-envelope"></i>
                                 </span>
                                 </span>
                                 <span class="contact_type_description" itemprop="email">admissions@virinchicollege.edu.np</span>
                                 </a>
                                 <a class="contact_type contact_type_link contact_type_phone" href="tel:484-664-3200">
                                 <span class="contact_type_label">
                                 <span class="contact_type_label_icon">
                                 <i class="fa fa-phone"></i>
                                 </span>
                                 </span>
                                 <span class="contact_type_description" itemprop="telephone">01-5553396, 9863253481</span>
                                 </a>
                              </div>
                           </div>
                           <div class="contact_body">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14133.769573369373!2d85.3184824!3d27.6727186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x66d083a187176a11!2sVirinchi%20College-%20Kumaripati!5e0!3m2!1sen!2snp!4v1665763828414!5m2!1sen!2snp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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