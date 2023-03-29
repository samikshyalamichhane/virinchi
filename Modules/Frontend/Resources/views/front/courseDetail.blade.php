@extends('frontend::layouts.front')
@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
@endpush
@section('content')
<!-- Banner Start -->
<div class="banner nc ba">
   <div class="container">
      <div class="banner-wrapper newbannerwrapper newbict">
         <h2>
            {!! $course->banner_text !!}
         </h2>
      </div>
   </div>
</div>
<!-- Banner End -->
<!-- Course Navbar Start -->
<div id="course-nav" class="course-nav dnn">
   <nav class="navbar navbar-expand navbar-light">
      <div class="container">
         <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
               <!--<li class="nav-item">-->
               <!--  <a class="nav-link scrollto" href="index.php">Home</a>-->
               <!--</li>-->
               <li class="nav-item">
                  <a class="nav-link scrollto" href="#overview">Overview</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link scrollto" href="#hexagonal">Hexagonal attributes</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link scrollto" href="#scope">Scope</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link scrollto" href="#modules">Course Modules</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link scrollto" href="#eligibility">Eligibility</a>
               </li>
               <li class="nav-item">
                  <a class="nav-link scrollto" href="#photo-gallery">Photo Gallery</a>
               </li>
            </ul>
            <!-- <div class="button-wrapper">
                     <a class="btn primary-btn" href="how-to-apply.php">Apply Now <i class="fa fa-angle-double-right"></i></a>
                     </div> -->
         </div>
      </div>
   </nav>
</div>
<!-- Course Navbar End -->
<main>
   <div class="course-content">
      <!-- Overview -->
      <div class="overview po" id="overview">
         <div class="container">
            <div class="overview-content section-title">
               {!! $course->overview !!}
               {{--<h2>Bachelor of <span>Information
                        and Communication Technology</span>
                     </h2>
                     <h3>Software Engineering</h3>
                     <!--<h3 class="course-title">Over<span>view</span></h3>-->
                     <p>
                        Bachelor of Information and Communication Technology (BICT) is
                        an utmost demanding professional program of new generation. BICT
                        is a four years under graduate honors degree program with
                        specialization in Software Engineering. It develops competent
                        students with skills to create innovative solutions for the
                        digital world.
                     </p>
                     <p>
                        We instill intellect into students considering future demands,
                        business requirements, career perspective and features of
                        programming languages through rigorous trainings and project
                        based add-ons of global standards in each semester.
                     </p>
                     <p>
                        The BICT program delivers in-depth academic knowledge and
                        exercises for skills in Software Engineering based on
                        Hand-On-Lab. The course design incorporates learning environment
                        to boost practical skills. Not just domain skills, our graduates
                        have in depth 360 degree skills. BICT graduates may choose to be
                        an entrepreneur or work in world class organizations in
                        promising areas of ICT. Globally human resource demands in these
                        areas are increasing rapidly, so is the remuneration, as
                        graduates are being more innovative competent and skilled.
                     </p>--}}
            </div>
         </div>
      </div>
      <!-- Overview End -->
      <!-- Hexagonal Attributes -->
      <div class="hexagonal" id="hexagonal">
         @if($course->courseAttributes->isNotEmpty())
         <div class="container">
            <div class="hexagonal-content">
               <h3 class="course-title">
                  Attributes of <span>Virinchi {{$course->short_title}}</span>
               </h3>
               <div class="">
                  <div class="">
                     <p>
                        {!!$course->attr_desc!!}
                     </p>
                  </div>
               </div>
            </div>
            @if($course->courseAttributes->isNotEmpty())
            <div class="hexagonal-wrapper">
               <div class="hex-grid">
                  @foreach($course->courseAttributes as $key=>$attribute)
                  @if($key == 0 || $key == 1)
                  <div class="hex">
                     <div class="hex-inner">
                        <div class="hex-front">
                           <div class="hex-front-in">
                              <p>{{$attribute->title}}</p>
                           </div>
                        </div>
                        <div class="hex-back">
                           <p>
                              {!! $attribute->attribute_description !!}
                           </p>
                        </div>
                     </div>
                  </div>
                  @endif
                  @endforeach
                  <!-- <div class="hex">
                           <div class="hex-inner">
                              <div class="hex-front">
                                 <div class="hex-front-in">
                                    <p>360 Degree<br>Skills</p>
                                 </div>
                              </div>
                              <div class="hex-back">
                                 <p>
                                    Virinchi BICT graduates are well acquainted with all aspects of programming languages and
                                    their scope. They are thus able to deliver effective software with efficiency. DOMAIN SKILLS,
                                    EMERGING TECHNOLOGIES, SKILL ENHANCEMENT TRAINING
                                 </p>
                              </div>
                           </div>
                        </div> -->
               </div>

               <div class="hex-grid center">
                  @foreach($course->courseAttributes as $key=>$attribute)
                  @if($key == 2)
                  <div class="hex">
                     <div class="hex-inner">
                        <div class="hex-front">
                           <div class="hex-front-in">
                              <p>{{$attribute->title}}</p>
                           </div>
                        </div>
                        <div class="hex-back">
                           <p>
                              {!! $attribute->attribute_description !!}
                           </p>
                        </div>
                     </div>
                  </div>
                  @endif
                  @endforeach
                  <div class="hex hex-mid">
                     <div class="hex-inner">
                        <div class="hex-front">
                           <div class="hex-front-in">
                              <p>BICT</p>
                           </div>
                        </div>
                        <div class="hex-back">
                           <p>
                              Virinchi BICT students are also able to reach out to those customers for the solutions they can offer. They know well what they want.
                           </p>
                        </div>
                     </div>
                  </div>
                  @foreach($course->courseAttributes as $key=>$attribute)
                  @if($key == 3)
                  <div class="hex">
                     <div class="hex-inner">
                        <div class="hex-front">
                           <div class="hex-front-in">
                              <p>{{$attribute->title}}</p>
                           </div>
                        </div>
                        <div class="hex-back">
                           <p>
                              {!! $attribute->attribute_description !!}
                           </p>
                        </div>
                     </div>
                  </div>
                  @endif
                  @endforeach
               </div>
               <div class="hex-grid">
                  @foreach($course->courseAttributes as $key=>$attribute)
                  @if($key == 4)
                  <div class="hex">
                     <div class="hex-inner">
                        <div class="hex-front">
                           <div class="hex-front-in">
                              <p>{{$attribute->title}}</p>
                           </div>
                        </div>
                        <div class="hex-back">
                           <p>
                              {!! $attribute->attribute_description !!}
                           </p>
                        </div>
                     </div>
                  </div>
                  @endif
                  @if($key == 5)
                  <div class="hex">
                     <div class="hex-inner">
                        <div class="hex-front">
                           <div class="hex-front-in">
                              <p>{{$attribute->title}}</p>
                           </div>
                        </div>
                        <div class="hex-back">
                           <p>
                              {!! $attribute->attribute_description !!}
                           </p>
                        </div>
                     </div>
                  </div>
                  @endif
                  @endforeach
               </div>
            </div>
            @endif
         </div>
         @endif
      </div>
      <!-- Hexagonal Attributes End -->
      <!-- Scope -->
      <div class="scope" id="scope">
         <div class="container">
            <div class="row">
               <div class="col-lg-5 col-md-6 col-12">
                  <div class="scope-content">
                     <h3 class="course-title">Scope</h3>
                     <p>
                        {!! $course->scope !!}
                     </p>
                  </div>
               </div>
               <div class="col-md-12 d-md-none d-block mb-4">
                  <img src="{{Storage::url($course->scope_image)}}" alt="" class="img-fluid" />
               </div>
               <div class="scope-img">
                  <img src="{{Storage::url($course->scope_image)}}" alt="" class="img-fluid" />
               </div>
            </div>
         </div>
      </div>
      <!-- Scope end -->
      <!-- Course Modules -->
      <div class="modules" id="modules">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-10">
                  <h3 class="course-title">Course <span>Modules</span></h3>
                  <!--<div>-->
                  <!--   <div class="text-control-1">-->
                  <!--      <div class="faqs-section">-->
                  <!--         @foreach($course->courseModules as $module)-->
                  <!--         <div class="faq accordion">-->
                  <!--            <div class="question-wrapper">-->
                  <!--               <div class="d-flex align-items-center">-->
                  <!--                  <p class="question" title="">{{$module->title}}</p>-->
                  <!--               </div>-->
                  <!--               <i class="material-icons drop">expand_more</i>-->
                  <!--            </div>-->
                  <!--            <div class="answer-wrapper">-->
                  <!--               <ul class="answer-list">-->
                  <!--               {!! $module->description !!}-->
                  <!--               </ul>-->
                  <!--            </div>-->
                  <!--         </div>-->
                  <!--         @endforeach-->
                  <!--         {{--<div class="faq accordion">-->
                  <!--            <div class="question-wrapper">-->
                  <!--               <div class="d-flex align-items-center">-->
                  <!--                  <p class="question" title="">Elective Subjects</p>-->
                  <!--               </div>-->
                  <!--               <i class="material-icons drop">expand_more</i>-->
                  <!--            </div>-->
                  <!--            <div class="answer-wrapper">-->
                  <!--               <ul class="answer-list">-->
                  <!--                  <li>Advanced Java Programming</li>-->
                  <!--                  <li>Communication Skills</li>-->
                  <!--                  <li>Computer Forensic</li>-->
                  <!--                  <li>Critical Thinking and Problem Solving Skills</li>-->
                  <!--                  <li>Fundamental of English Grammar</li>-->
                  <!--                  <li>Internet Security</li>-->
                  <!--                  <li>Web Economy</li>-->
                  <!--               </ul>-->
                  <!--            </div>-->
                  <!--         </div>-->
                  <!--         <div class="faq accordion">-->
                  <!--            <div class="question-wrapper">-->
                  <!--               <div class="d-flex align-items-center">-->
                  <!--                  <p class="question" title="">-->
                  <!--                     Specialization subjects on software engineering-->
                  <!--                  </p>-->
                  <!--               </div>-->
                  <!--               <i class="material-icons drop">expand_more</i>-->
                  <!--            </div>-->
                  <!--            <div class="answer-wrapper">-->
                  <!--               <ul class="answer-list">-->
                  <!--                  <li>Agile Software Development</li>-->
                  <!--                  <li>Requirements Engineering</li>-->
                  <!--                  <li>Software Constructions</li>-->
                  <!--                  <li>Software Quality Assurance</li>-->
                  <!--                  <li>Software Integration &amp; Improvement</li>-->
                  <!--                  <li>Software Architecture &amp; Design</li>-->
                  <!--                  <li>Software Engineering for Real Time-System</li>-->
                  <!--                  <li>Software Testing</li>-->
                  <!--                  <li>Software Engineering</li>-->
                  <!--                  <li>Usability Engineering</li>-->
                  <!--               </ul>-->
                  <!--            </div>-->
                  <!--         </div>-->
                  <!--         <div class="faq accordion">-->
                  <!--            <div class="question-wrapper">-->
                  <!--               <div class="d-flex align-items-center">-->
                  <!--                  <p class="question" title="">-->
                  <!--                     University compulsory subjects-->
                  <!--                  </p>-->
                  <!--               </div>-->
                  <!--               <i class="material-icons drop">expand_more</i>-->
                  <!--            </div>-->
                  <!--            <div class="answer-wrapper">-->
                  <!--               <ul class="answer-list">-->
                  <!--                  <li>Entrepreneurship in Asia</li>-->
                  <!--                  <li>Information Literacy and Research Skills</li>-->
                  <!--                  <li>Internet &amp; WWW</li>-->
                  <!--               </ul>-->
                  <!--            </div>-->
                  <!--         </div>-->
                  <!--         <div class="faq accordion">-->
                  <!--            <div class="question-wrapper">-->
                  <!--               <div class="d-flex align-items-center">-->
                  <!--                  <p class="question" title="">-->
                  <!--                     MQA Compulsory Subjects-->
                  <!--                  </p>-->
                  <!--               </div>-->
                  <!--               <i class="material-icons drop">expand_more</i>-->
                  <!--            </div>-->
                  <!--            <div class="answer-wrapper">-->
                  <!--               <ul class="answer-list">-->
                  <!--                  <li>Academic Writing</li>-->
                  <!--                  <li>Comparative Ethics</li>-->
                  <!--                  <li>Social Responsibility Project</li>-->
                  <!--               </ul>-->
                  <!--            </div>-->
                  <!--         </div>--}}-->
                  <!--      </div>-->
                  <!--   </div>-->
                  <!--</div>-->
                  <div id="accordion" class="accordion acd">
                     <div class="card mb-0">
                        @foreach($course->courseModules as $key=>$module)
                        @if($key==0)
                        <div class="card-header" data-toggle="collapse" href="#collapse{{$key}}" aria-expanded="true">
                           <a class="card-title">
                              {{$module->title}}
                           </a>
                        </div>
                        <div id="collapse{{$key}}" class="card-body collapse" data-parent="#accordion" style="">
                           {!! $module->description !!}
                        </div>
                        @endif
                        @if($key>0)
                        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapse{{$key}}" aria-expanded="false">
                           <a class="card-title">
                           {{$module->title}}
                           </a>
                        </div>
                        <div id="collapse{{$key}}" class="card-body collapse" data-parent="#accordion" style="">
                           {!! $module->description !!}
                        </div>
                        @endif
                        @endforeach
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Course Modules End -->
      <!-- Eligibility -->
      <div class="eligibility saee" id="eligibility">
         <div class="container">
            <div class="row">
               <div class="col-lg-9 col-md-10">
                  <h3 class="course-title"><span>Eligibility</span></h3>
                  <div class="eligibility-content">
                     {!! $course->eligibility !!}
                     {{--<p>
                             Students who have passed NEB (Grade 12) or equivalent from any  stream can join the BICT program. The criteria is defined more precisely as given hereunder. Applying students should meet any one of the given options.
                           </p>
                           <ul>
                              <li>
                                 Should have completed Grade 12  or equivalent level with overall D+ and have scored minimum C+ in Maths in either grade 12 or 10.


                              </li>
                              <li>
                                 Should have completed Cambridge A Level with C grade in at least 2 subjects in Advanced Level and have scored minimum C+ in Maths in either A Level or grade 10.


                              </li>
                              
                           </ul>--}}
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Eligibility End -->
      <!-- Photo Gallery  -->
      <div class="life photo-gallery" id="photo-gallery">
         <div class="container">
            <div class="section-title mb-5">
               <!--<h3 class="course-title"><span>See Inside BICT</span></h3>-->
               <h2>See Inside <span>BICT</span></h2>
            </div>
            <div class="gallery-content">
               <div class="gallery-images">
                  @foreach($course->courseGalleries as $key=>$gallery)
                  <figure class="gallery-image gallery-image--1x1 loaded" id="image{{$key++}}">
                     <a href="#image{{$key++}}">
                        <div class="gallery-image__crop" tabindex="-1">
                           <img class="gallery-image__media lazyloaded" alt="ICT Mela 2.0" src="{{ $gallery->imageUrl() }}" />
                        </div>
                        <figcaption class="gallery-image__caption">
                           ICT Mela 2.0
                        </figcaption>
                     </a>
                  </figure>
                  @endforeach
                  {{--<figure class="gallery-image gallery-image--1x1 loaded" id="image2">
                           <a href="#image2">
                              <div class="gallery-image__crop" tabindex="-1">
                                 <img class="gallery-image__media lazyloaded" alt="Students in Workshop" src="{{asset('front/assets/img/bict/bict-2.jpg')}}" />
               </div>
               <figcaption class="gallery-image__caption">
                  Students in Workshop
               </figcaption>
               </a>
               </figure>
               <figure class="gallery-image gallery-image--1x12 loaded" id="image3">
                  <a href="#image3">
                     <div class="gallery-image__crop" tabindex="-1">
                        <img class="gallery-image__media lazyloaded" alt="Contestents-of-Squid-Game-organized-during-ICT-Mela-2.0" src="{{asset('front/assets/img/bict/bict-3.jpg')}}" />
                     </div>
                     <figcaption class="gallery-image__caption">
                        Contestents of Squid Game organized during ICT Mela 2.0
                     </figcaption>
                  </a>
               </figure>
               <figure class="gallery-image gallery-image--1x12 loaded" id="image4">
                  <a href="#image4">
                     <div class="gallery-image__crop" tabindex="-1">
                        <img class="gallery-image__media lazyloaded" alt="Firefighting Robot" src="{{asset('front/assets/img/bict/bict-4.jpg')}}" />
                     </div>
                     <figcaption class="gallery-image__caption">
                        Firefighting Robot
                     </figcaption>
                  </a>
               </figure>
               <figure class="gallery-image gallery-image--1x3 loaded" id="image5">
                  <a href="#image5">
                     <div class="gallery-image__crop" tabindex="-1">
                        <img class="gallery-image__media lazyloaded" alt="Fun Moment" src="{{asset('front/assets/img/bict/bict-5.jpg')}}" />
                     </div>
                     <figcaption class="gallery-image__caption">
                        Fun Moment
                     </figcaption>
                  </a>
               </figure>
               <figure class="gallery-image gallery-image--1x12 loaded" id="image6">
                  <a href="#image6">
                     <div class="gallery-image__crop" tabindex="-1">
                        <img class="gallery-image__media lazyloaded" alt="Hardware assembling workshop for school students" src="{{asset('front/assets/img/bict/bict-6.jpg')}}" />
                     </div>
                     <figcaption class="gallery-image__caption">
                        Hardware assembling workshop for school students
                     </figcaption>
                  </a>
               </figure>
               <figure class="gallery-image gallery-image--1x1 loaded" id="image7">
                  <a href="#image7">
                     <div class="gallery-image__crop" tabindex="-1">
                        <img class="gallery-image__media lazyloaded" alt="ICT experts at Panel discussion" src="{{asset('front/assets/img/BICT .jpg')}}" />
                     </div>
                     <figcaption class="gallery-image__caption">
                        BICT students showcasing Jarvis Iron Man project
                     </figcaption>
                  </a>
               </figure>--}}
            </div>
         </div>
         <!--  <div class="row mx-auto text-center">-->
         <!--  <div class="col-md-6 text-center visit">-->
         <!--                    <a class="btn primary-btn" href="#">Visit Us</a>-->
         <!--                </div>-->
         <!--                 <div class="col-md-6 text-center visit">-->
         <!--                    <a class="btn primary-btn" href="how-to-apply.php">Admission Information</a>-->
         <!--                </div>-->
         <!--</div>-->
      </div>
   </div>
   <div class="next-step">
      <div class="container">
         <h5>TAKE THE NEXT STEP</h5>
         <div class="row ns">
            <div class="col-md-3 text-center visit">
               <a class="btn primary-btn" href="{{route('requestInfo')}}#scope">Visit Us<img class="ar" src="{{asset('front/assets/img/arrow-right-white.svg')}}" style="float:right"></a>
            </div>
            <div class="col-md-3 text-center visit">
               <a class="btn primary-btn" href="{{route('howToApply')}}">Admission Information <img class="ar" src="{{asset('front/assets/img/arrow-right-white.svg')}}" style="float:right"></i>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- Photo Gallery End -->
   </div>
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

   $(function() {
      $(".gallery-image").click(function() {
         $(this)
            .toggleClass("gallery-image--preview")
            .siblings()
            .removeClass("gallery-image--preview");
      });
   });
</script>
<script>
   (function() {
      "use strict";

      /**
       * Easy selector helper function
       */
      const select = (el, all = false) => {
         el = el.trim();
         if (all) {
            return [...document.querySelectorAll(el)];
         } else {
            return document.querySelector(el);
         }
      };

      /**
       * Easy event listener function
       */
      const on = (type, el, listener, all = false) => {
         let selectEl = select(el, all);
         if (selectEl) {
            if (all) {
               selectEl.forEach((e) => e.addEventListener(type, listener));
            } else {
               selectEl.addEventListener(type, listener);
            }
         }
      };

      /**
       * Easy on scroll event listener
       */
      const onscroll = (el, listener) => {
         el.addEventListener("scroll", listener);
      };

      /**
       * Navbar links active state on scroll
       */
      let navbarlink = select("#course-nav .scrollto", true);
      const navbarlinksActive = () => {
         let position = window.scrollY + 200;
         navbarlink.forEach((navbarlink) => {
            if (!navbarlink.hash) return;
            let section = select(navbarlink.hash);
            if (!section) return;
            if (
               position >= section.offsetTop &&
               position <= section.offsetTop + section.offsetHeight
            ) {
               navbarlink.classList.add("active");
            } else {
               navbarlink.classList.remove("active");
            }
         });
      };
      window.addEventListener("load", navbarlinksActive);
      onscroll(document, navbarlinksActive);
   })();
</script>
<script>
   // Hex
   // console.log($(".hexagonal-wrapper .hex-grid .hexGridIn .hex"))
   // $(".hexagonal-wrapper .hex-grid .hexGridIn .hex ").hover(function() => {
   //   alert("Helo")
   // })
   let hexs = document.querySelectorAll(
      ".hexagonal-wrapper .hex-grid .hexGridIn .hex "
   );
   hexs.forEach((hex) => {
      hex.addEventListener("mouseover", () => {
         hex.children[1].children[0].style.display = "none";

         hex.children[1].children[1].style.display = "block";
      });

      hex.addEventListener("mouseleave", () => {
         hex.children[1].children[0].style.display = "block";

         hex.children[1].children[1].style.display = "none";
      });
   });
</script>
@endpush