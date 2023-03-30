@extends('frontend::layouts.front')
@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
@endpush
@section('content')

<!-- Banner Start -->
<div class="banner noh">
   <div class="container">
      <div class="banner-wrapper">
         <h2>Admissions</h2>
      </div>
   </div>
</div>
<!-- Banner End -->
<main>
   <!-- Apply Start -->
   <div class="apply-inner">
      <div class="container">
         <div class="row">
            <div class="col-md-9">
               <div class="inner-title aptitle">
                  {!! $detail->description !!}
                  <!-- <h3 class="course-title">Ready to be a <span>Virinchian </span></h3>
                  <p>
                     If you’re ready to apply to Virinchi College, you’re in the right place. Find your application<br> path by reviewing the options below, which will lead
                     you to requirements and a checklist<br> designed to walk you through the process.
                  </p> -->
               </div>
               <!-- FAQ Modules -->
               <!--<div class="faq-apply" id="faq-apply">-->
               <!--   <div>-->
               <!--      <div class="text-control-1">-->
               <!--         <div class="faqs-section">-->
               <!--            <div class="faq accordion">-->
               <!--               <div class="question-wrapper">-->
               <!--                  <div class="d-flex align-items-center">-->
               <!--                     <p class="question" title="">Apply Online</p>-->
               <!--                  </div>-->
               <!--                  <i class="material-icons drop">expand_more</i>-->
               <!--               </div>-->
               <!--               <div class="answer-wrapper">-->
               <!--                  <p class="answer newanswer">-->
               <!--                     Fill out the application form to apply in your interested programs.-->
               <!--                  <div class="button-wrapper nbw" style="padding-bottom:40px; display:block;">-->
               <!--                     <a class="btn primary-btn" href="{{route('enrollmentForm')}}">Enrollment Form</a>-->
               <!--                  </div>-->
               <!--                  </p>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--            <div class="faq accordion">-->
               <!--               <div class="question-wrapper">-->
               <!--                  <div class="d-flex align-items-center">-->
               <!--                     <p class="question" title="">Submit your application fee</p>-->
               <!--                  </div>-->
               <!--                  <i class="material-icons drop">expand_more</i>-->
               <!--               </div>-->
               <!--               <div class="answer-wrapper">-->
               <!--                  <div class="col-md-12 faqlist pt-4 qrpopup answer">-->
               <!--<h6>Be ready to pay the application fee</h6>-->
               <!--                     <p>All applicants are required to submit an application fee to process the application form. The online application fee is NPR. {{$dashboard_site->application_fee}} and can be paid via e-sewa QR code (<button type="button" class="btn btn-primary click" data-toggle="modal" data-target="#exampleModal">-->
               <!--                           click here-->
               <!--                        </button>).The fee is non-refundable.</p>-->
               <!--                     {!! $dashboard_site->application_fee_desc !!}-->
               <!--<img class="" alt="" src="{{asset('front/assets/img/Virinchi College_Qr (1)-page-001 (1).jpg')}}" />-->
               <!--                  </div>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--            <div class="faq accordion">-->
               <!--               <div class="question-wrapper">-->
               <!--                  <div class="d-flex align-items-center">-->
               <!--                     <p class="question" title="">-->
               <!--                        Document checklist-->
               <!--                     </p>-->
               <!--                  </div>-->
               <!--                  <i class="material-icons drop">expand_more</i>-->
               <!--               </div>-->
               <!--               <div class="answer-wrapper">-->
               <!--                  @foreach($docs as $doc)-->
               <!--                  <ul class="answer-list">-->
               <!--                     <div class="row mb-2 mt-3">-->
               <!--                        <h6>{{$doc->title}}</h6>-->
               <!--                     </div>-->
               <!--                     {!! $doc->description !!}-->
               <!--                     <hr>-->
               <!--                  </ul>-->
               <!--                  @endforeach-->

               <!--                  {{--<ul class="answer-list">-->
               <!--                     <div class="row mb-2 mt-2">-->
               <!--                        <h6>Document Checklist For BICT</h6>-->
               <!--                     </div>-->
               <!--                     <li>SEE/Grade 10 Marksheet, Character and Certificate</li>-->
               <!--                     <li>Grade 12 /NEB/any equivalent degree Transcript, Character, Provisional and Migration </li>-->
               <!--                     <li>English Proficiency Letter/ IELTS/ TOEFL</li>-->
               <!--                     <li>Curricular vitae</li>-->
               <!--                     <li>Citizenship (In English) or Passport</li>-->
               <!--                     <li>Passport Size Photo 4 nos</li>-->
               <!--<li>Job Recommendation*</li>-->
               <!--                     <li><b>Note: All documents must be notarized</b></li>-->
               <!--                  </ul>--}}-->
               <!--               </div>-->
               <!--            </div>-->
               <!--            <div class="faq accordion expanded" id="faqsection" >-->
               <!--               <div class="question-wrapper" id="newfaq">-->
               <!--                  <div class="d-flex align-items-center">-->
               <!--                     <p class="question faz" title="">-->
               <!--                        FAQs-->
               <!--                     </p>-->
               <!--                  </div>-->
               <!--                  <i class="material-icons drop">expand_more</i>-->
               <!--               </div>-->

               <!--               <div class="answer-wrapper">-->
               <!--                  <p class="answer">-->
               <!--                  <div class="col-md-12 faqlist">-->
               <!--                                           <div id="accordion">-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="headingOne">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">-->
               <!--          <h6>Q. What is the procedure of admission? </h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->

               <!--    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">-->
               <!--      <div class="card-body">-->

               <!--    After visiting the college you need to take an admission form and appear the ability test. After that an interview is taken, then you need to get admission by submitting all the required documents and admission amount.-->

               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="headingTwo">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">-->
               <!--          <h6>Q. Does the college provide hostel and transportation facilities?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        Yes, we provide hostel facilities. But the transportation facilities are not provided.-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="headingThree">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">-->
               <!--         <h6>Q. Which University?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        We are affiliated to Asia e University (AeU), COLLABORATIVE MULTINATIONAL UNIVERSITY, is globally recognized University, established under Asia Cooperation Dialogue (ACD) with support of 34 Asian countries.-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="a">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#aa" aria-expanded="false" aria-controls="aa">-->
               <!--          <h6>Q. What is the fee structure?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="aa" class="collapse" aria-labelledby="a" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        Please contact the admission officer for fee details.-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="b">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#bb" aria-expanded="false" aria-controls="collapseThree">-->
               <!--         <h6>Q. Is equivalent to TU and MOE registered?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="bb" class="collapse" aria-labelledby="b" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        Yes, we are equivalent to TU and registered from Ministry of Education (MOE) Nepal.-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->

               <!--<div class="card">-->
               <!--    <div class="card-header" id="c">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#cc" aria-expanded="false" aria-controls="cc">-->
               <!--          <h6>Q. What about the class timing for MBA?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="cc" class="collapse" aria-labelledby="c" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        We are running both the morning and the evening classes. Morning classes starts from 6:30 am to 8:30 am whereas evening classes starts from 5:45 pm to 7:45 pm-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="d">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#dd" aria-expanded="false" aria-controls="dd">-->
               <!--         <h6>Q. Want to know more about BICT?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="dd" class="collapse" aria-labelledby="d" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        Bachelor of Information & Communication Technology (BICT) with specialization in SOFTWARE ENGINEERING is globally high demanded professional program of new generation offering huge range of job opportunities with high paying remuneration after graduation. It is 4 years Hons. degree program that develops students' core skills to create innovative solutions for the digital world in every working sector.-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="e">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ee" aria-expanded="false" aria-controls="ee">-->
               <!--         <h6>Q. Are there any scholarships?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="ee" class="collapse" aria-labelledby="e" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        Yes, we are providing different types of scholarships. To know more contact the office of admission.-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="ea">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#eee" aria-expanded="false" aria-controls="eee">-->
               <!--         <h6>Q. When is Virinchi College established?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="eee" class="collapse" aria-labelledby="ea" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        Virinchi college is established in 2013.-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="f">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#ff" aria-expanded="false" aria-controls="ff">-->
               <!--         <h6>Q. What program are offered at Virinchi college?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="ff" class="collapse" aria-labelledby="f" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        We offer BICT (Bachelors of Information and Communication Technology) specialization in Software Engineering and MBA (Master in Business Administration) in Entrepreneurship.-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->
               <!--  <div class="card">-->
               <!--    <div class="card-header" id="g">-->
               <!--      <h5 class="mb-0">-->
               <!--        <button class="btn btn-link collapsed" data-toggle="collapse" data-target="#gg" aria-expanded="false" aria-controls="gg">-->
               <!--         <h6>Q. Does Virinchi provides Internships and job placements?</h6>-->
               <!--        </button>-->
               <!--      </h5>-->
               <!--    </div>-->
               <!--    <div id="gg" class="collapse" aria-labelledby="g" data-parent="#accordion">-->
               <!--      <div class="card-body">-->
               <!--        Yes, we assist our students for internship and job placement within our recruitment partner organizations.-->
               <!--      </div>-->
               <!--    </div>-->
               <!--  </div>-->

               <!--</div>-->
               <!--                     <div id="accordion" class="accordion">-->
               <!--                        <div class="card mb-0" >-->
               <!--                           @foreach($faqs as $key=>$faq)-->
               <!--                           <div class="card-header collapsed " data-toggle="collapse" href="#collapse{{$faq->slug}}">-->
               <!--                              <a class="card-title">-->
               <!--                                 Q. {{$faq->question}}-->
               <!--                              </a>-->
               <!--                           </div>-->
               <!--                           <div id="collapse{{$faq->slug}}" class="card-body collapse" data-parent="#accordion">-->
               <!--                              {!! $faq->answers !!}-->
               <!--                           </div>-->
               <!--                           @endforeach-->
               <!--                           {{--<div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">-->
               <!--                              <a class="card-title">-->
               <!--                                 Q. Does the college provide hostel and transportation facilities?-->
               <!--                              </a>-->
               <!--                           </div>-->
               <!--                           <div id="collapseTwo" class="card-body collapse" data-parent="#accordion">-->
               <!--                              Yes, we provide hostel facilities. But the transportation facilities are not provided.-->
               <!--                           </div>-->
               <!--                           <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">-->
               <!--                              <a class="card-title">-->
               <!--                                 Q. Which University?-->
               <!--                              </a>-->
               <!--                           </div>-->
               <!--                           <div id="collapseThree" class="collapse" data-parent="#accordion">-->
               <!--                              <div class="card-body">-->
               <!--                                 We are affiliated to Asia e University (AeU), COLLABORATIVE MULTINATIONAL UNIVERSITY, is globally recognized University, established under Asia Cooperation Dialogue (ACD) with support of 34 Asian countries.-->
               <!--                              </div>-->
               <!--                           </div>-->
               <!--                           <div class="card-header collapsed" data-toggle="collapse" href="#z">-->
               <!--                              <a class="card-title">-->
               <!--                                 Q. What is the fee structure?-->
               <!--                              </a>-->
               <!--                           </div>-->
               <!--                           <div id="z" class="card-body collapse" data-parent="#accordion">-->

               <!--                              Please contact the admission officer for fee details.-->

               <!--                           </div>-->
               <!--                           <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#y">-->
               <!--                              <a class="card-title">-->
               <!--                                 Q. Is equivalent to TU and MOE registered?-->
               <!--                              </a>-->
               <!--                           </div>-->
               <!--                           <div id="y" class="card-body collapse" data-parent="#accordion">-->
               <!--                              Yes, we are equivalent to TU and registered from Ministry of Education (MOE) Nepal.-->


               <!--                           </div>-->
               <!--                           <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#r">-->
               <!--                              <a class="card-title">-->
               <!--                                 Q. What about the class timing for MBA?-->
               <!--                              </a>-->
               <!--                           </div>-->
               <!--                           <div id="r" class="collapse" data-parent="#accordion">-->
               <!--                              <div class="card-body">-->
               <!--                                 We are running both the morning and the evening classes. Morning classes starts from 6:30 am to 8:30 am whereas evening classes starts from 5:45 pm to 7:45 pm-->

               <!--                              </div>-->
               <!--                           </div>--}}-->
               <!--                        </div>-->
               <!--                        {{--<div class="card-header collapsed" data-toggle="collapse" href="#cc">-->
               <!--                           <a class="card-title">-->
               <!--                              Q. Want to know more about BICT?-->
               <!--                           </a>-->
               <!--                        </div>-->
               <!--                        <div id="cc" class="card-body collapse" data-parent="#accordion">-->

               <!--                           Bachelor of Information & Communication Technology (BICT) with specialization in SOFTWARE ENGINEERING is globally high demanded professional program of new generation offering huge range of job opportunities with high paying remuneration after graduation. It is 4 years Hons. degree program that develops students' core skills to create innovative solutions for the digital world in every working sector.-->

               <!--                        </div>-->
               <!--                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#oo">-->
               <!--                           <a class="card-title">-->
               <!--                              Q. Are there any scholarships?-->
               <!--                           </a>-->
               <!--                        </div>-->
               <!--                        <div id="oo" class="card-body collapse" data-parent="#accordion">-->
               <!--                           Yes, we are providing different types of scholarships. To know more contact the office of admission.-->


               <!--                        </div>-->
               <!--                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#eee">-->
               <!--                           <a class="card-title">-->
               <!--                              Q. When is Virinchi College established?-->
               <!--                           </a>-->
               <!--                        </div>-->
               <!--                        <div id="eee" class="collapse" data-parent="#accordion">-->
               <!--                           <div class="card-body">-->
               <!--                              Virinchi college is established in 2013.-->

               <!--                           </div>-->
               <!--                        </div>-->
               <!--                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#ooo">-->
               <!--                           <a class="card-title">-->
               <!--                              Q. What program are offered at Virinchi college?-->
               <!--                           </a>-->
               <!--                        </div>-->
               <!--                        <div id="ooo" class="card-body collapse" data-parent="#accordion">-->
               <!--                           We offer BICT (Bachelors of Information and Communication Technology) specialization in Software Engineering and MBA (Master in Business Administration) in Entrepreneurship.-->


               <!--                        </div>-->
               <!--                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#p">-->
               <!--                           <a class="card-title">-->
               <!--                              Q. Does Virinchi provides Internships and job placements?-->
               <!--                           </a>-->
               <!--                        </div>-->
               <!--                        <div id="p" class="collapse" data-parent="#accordion">-->
               <!--                           <div class="card-body">-->
               <!--                              Yes, we assist our students for internship and job placement within our recruitment partner organizations.-->

               <!--                           </div>-->
               <!--                        </div>--}}-->

               <!--                     </div>-->
               <!--<h6>Q. What is the procedure of admission? </h6>-->
               <!--After visiting the college you need to take an admission form and appear the ability test. After that an interview is taken, then you need to get admission by submitting all the required documents and admission amount.-->
               <!--                  </div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. What documents must be submitted to properly file an application? </h6>-->
               <!--   <p>The required documents for BICT are:</p>-->
               <!--   <ul class="answer-list">-->
               <!--      <li>Passport or citizenship</li>-->
               <!--      <li>SEE Marksheet/Character/Certificate</li>-->
               <!--      <li>NEB Transcript/Migration/Provisional/Character</li>-->
               <!--      <li>English Proficiency</li>-->
               <!--      <li>CV and Photo</li>-->
               <!--   </ul>-->
               <!--   <p>The required documents for MBA are:</p>-->
               <!--   <ul class="answer-list">-->
               <!--      <li>Passport or citizenship</li>-->
               <!--      <li>SEE Marksheet/Character/Certificate</li>-->
               <!--      <li>NEB Transcript/Migration/Provisional/Character</li>-->
               <!--      <li>Bachelor Transcript/Migration/Provisional/Completion/Character</li>-->
               <!--      <li>English Proficiency</li>-->
               <!--      <li>CV and Photo</li>-->
               <!--   </ul>-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. Does the college provide hostel and transportation facilities? </h6>-->
               <!--   Yes, we provide hostel facilities. But the transportation facilities are not provided.-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. Which University?</h6>-->
               <!--   We are affiliated to Asia e University (AeU), COLLABORATIVE MULTINATIONAL UNIVERSITY, is globally recognized University, established under Asia Cooperation Dialogue (ACD) with support of 34 Asian countries.-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. What is the fee structure?</h6>-->
               <!--   Please contact the admission officer for fee details.-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. Is equivalent to TU and MOE registered?</h6>-->
               <!--   Yes, we are equivalent to TU and registered from Ministry of Education (MOE) Nepal.-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. What about the class timing for MBA?</h6>-->
               <!--   We are running both the morning and the evening classes. Morning classes starts from 6:30 am to 8:30 am whereas evening classes starts from 5:45 pm to 7:45 pm-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. Want to know more about BICT?</h6>-->
               <!--   Bachelor of Information & Communication Technology (BICT) with specialization in SOFTWARE ENGINEERING is globally high demanded professional program of new generation offering huge range of job opportunities with high paying remuneration after graduation. It is 4 years Hons. degree program that develops students' core skills to create innovative solutions for the digital world in every working sector.-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. Are there any scholarships?</h6>-->
               <!--   Yes, we are providing different types of scholarships. To know more contact the office of admission.-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. When is Virinchi College established?</h6>-->
               <!--   Virinchi college is established in 2013.-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. What program are offered at Virinchi college?</h6>-->
               <!--   We offer BICT (Bachelors of Information and Communication Technology) specialization in Software Engineering and MBA (Master in Business Administration) in Entrepreneurship.-->
               <!--</div>-->
               <!--<div class="col-md-12 faqlist">-->
               <!--   <h6>Q. Does Virinchi provides Internships and job placements?</h6>-->
               <!--   Yes, we assist our students for internship and job placement within our recruitment partner organizations.-->
               <!--</div>-->
               <!--                  </p>-->
               <!--               </div>-->
               <!--            </div>-->
               <!--         </div>-->
               <!--      </div>-->
               <!--   </div>-->
               <!--</div>-->
               <div id="accordion" class="accordion acd htaa">
                  <div class="card mb-0">
                     <div class="card-header" data-toggle="collapse" href="#collapseOne" aria-expanded="true">
                        <a class="card-title">
                           Apply Online
                        </a>
                     </div>
                     <div id="collapseOne" class="card-body collapse" data-parent="#accordion" style="">
                        <p class="answer newanswer">
                           Fill out the application form to apply in your interested programs.
                        <div class="button-wrapper nbw" style="padding-bottom:40px; display:block;">
                           <a class="btn primary-btn" href="{{route('enrollmentForm')}}">Enrollment Form</a>
                        </div>
                        </p>

                     </div>
                     <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false">
                        <a class="card-title">
                           Submit your application fee
                        </a>
                     </div>
                     <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" style="">
                        <p>All applicants are required to submit an application fee to process the application form. The online application fee is NPR. {{$dashboard_site->application_fee}} and can be paid via e-sewa QR code (<button type="button" class="btn btn-primary click" data-toggle="modal" data-target="#exampleModal">
                              click here
                           </button>).The fee is non-refundable.</p>
                        {!! $dashboard_site->application_fee_desc !!}

                     </div>
                     <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false">
                        <a class="card-title">
                           Document Checklist
                        </a>
                     </div>
                     <div id="collapseThree" class="collapse" data-parent="#accordion" style="">
                        <div class="card-body">
                           @foreach($docs as $doc)
                           <ul class="answer-list">
                              <div class="row mb-2 mt-3">
                                 <h6>{{$doc->title}}</h6>
                              </div>
                              {!! $doc->description !!}
                              <hr>
                           </ul>
                           @endforeach
                        </div>
                     </div>
                     <div class="card-header collapsed" data-toggle="collapse" href="#z" aria-expanded="false">
                        <a class="card-title">
                           FAQS
                        </a>
                     </div>
                     <div id="z" class="card-body collapse" data-parent="#accordion1">
                        @foreach($faqs as $key=>$faq)
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion{{$key}}" href="#{{$key}}" aria-expanded="false">
                           <a class="card-title">
                              Q. {{$faq->question}}
                           </a>
                        </div>
                        <div id="{{$key}}" class="card-body collapse" data-parent="#accordion{{$key}}">
                           {!! $faq->answers !!}
                        </div>
                        @endforeach

                     </div>
                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" href="#cc" aria-expanded="false">
                     <a class="card-title">
                        Q. Want to know more about BICT?
                     </a>
                  </div>
                  <div id="cc" class="card-body collapse" data-parent="#accordion">

                     <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion1" href="#oo" aria-expanded="false">
                        <a class="card-title">
                           Q. Are there any scholarships?
                        </a>
                     </div>
                     <div id="oo" class="card-body collapse" data-parent="#accordion1">
                        Yes, we are providing different types of scholarships. To know more contact the office of admission.
                     </div>
                     <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion1" href="#eee" aria-expanded="false">
                        <a class="card-title">
                           Q. When is Virinchi College established?
                        </a>  
                     </div>
                     <div id="eee" class="collapse" data-parent="#accordion1">
                        <div class="card-body">
                           Virinchi college is established in 2013.

                        </div>
                     </div>
                  </div>

                  <!-- <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#eee" aria-expanded="false">
                     <a class="card-title">
                        Q. When is Virinchi College established?
                     </a>
                  </div>
                  <div id="eee" class="collapse" data-parent="#accordion">
                     <div class="card-body">
                        Virinchi college is established in 2013.

                     </div>
                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#ooo" aria-expanded="false">
                     <a class="card-title">
                        Q. What program are offered at Virinchi college?
                     </a>
                  </div>
                  <div id="ooo" class="card-body collapse" data-parent="#accordion">
                     We offer BICT (Bachelors of Information and Communication Technology) specialization in Software Engineering and MBA (Master in Business Administration) in Entrepreneurship.


                  </div>
                  <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#p" aria-expanded="false">
                     <a class="card-title">
                        Q. Does Virinchi provides Internships and job placements?
                     </a>
                  </div>
                  <div id="p" class="collapse" data-parent="#accordion">
                     <div class="card-body">
                        Yes, we assist our students for internship and job placement within our recruitment partner organizations.

                     </div>
                  </div> -->

               </div>
               <!-- FAQ End -->
            </div>
            <div class="col-md-3">
               <div class="admission-right newadright">
                  <a class="btn primary-btn adudate" href="#">Admission Update</a>
                  <div class="right-graybox">
                     @foreach($admissions as $admission)
                     <div class="right-graybox-content mt-3 mb-5">
                        <span>{{$admission->title}}</span>
                        <h2>{{$admission->date->format('M. Y') }}</h2>
                        <p>{{$admission->status}}</p>
                     </div>
                     @endforeach
                     {{--<div class="right-graybox-content  mt-3 mb-5">
                        <span>BICT</span>
                        <h2>JAN. 2023</h2>
                        <p>Admission closes soon</p>
                     </div>--}}
                  </div>
               </div>
               <!-- end admission right -->
            </div>
         </div>
      </div>
      <!-- end col9 -->
   </div>
   <!-- end row -->
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
                        <div class="contact_types_header bottom-aligner" style="margin-top:177px;">
                           <a class="contact_type contact_type_link contact_type_email" href="mailto:admissions@muhlenberg.edu">
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
                     <!-- <div class="contact_body">
                              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14133.769573369373!2d85.3184824!3d27.6727186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x66d083a187176a11!2sVirinchi%20College-%20Kumaripati!5e0!3m2!1sen!2snp!4v1665763828414!5m2!1sen!2snp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                              </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact us End -->
</main>

@endsection

@push('script')
<script>
   // FAQs
   $(".question-wrapper").click(function() {
      var container = $(this).parents(".accordion");
      var answer = container.find(".answer-wrapper");
      var trigger = container.find(".material-icons.drop");
      var state = container.find(".question-wrapper");

      answer.animate({
         height: "toggle"
      }, 100);

      if (trigger.hasClass("icon-expend")) {
         trigger.removeClass("icon-expend");
         // state.removeClass("active");
      } else {
         trigger.addClass("icon-expend");
         // state.addClass("active");
      }

      if (container.hasClass("expanded")) {
         container.removeClass("expanded");
      } else {
         container.addClass("expanded");
      }
   });
</script>
@endpush