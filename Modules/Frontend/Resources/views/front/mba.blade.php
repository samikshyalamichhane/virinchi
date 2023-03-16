@extends('frontend::layouts.front')
@push('styles')
<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css" />
@endpush
@section('content')
  <div class="banner nc ba newmbaa">
         <div class="container">
            <div class="banner-wrapper newbannerwrapper nmn">
               <h2>
                  GROW<br><span>PROFESSIONALLY</span><br> <p>AT WORK OR AT BUSINESS</p>
               </h2>
            </div>
         </div>
      </div>
      <!-- Banner End -->
      <!-- Course Navbar Start -->
      <div id="course-nav" class="course-nav">
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
                        <a class="nav-link scrollto" href="#modules">Course Modules</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link scrollto" href="#eligibility">Eligibility</a>
                     </li>
                     <li class="nav-item">
                        <a class="nav-link scrollto" href="#photo-gallery">Photo Gallery</a>
                     </li>
                  </ul>
                  <div class="button-wrapper">
                     <a class="btn primary-btn" href="how-to-apply.php">Apply Now <i class="fa fa-angle-double-right"></i></a>
                  </div>
               </div>
            </div>
         </nav>
      </div>
      <!-- Course Navbar End -->
      <main>
         <div class="course-content">
            <!-- Overview -->
            <div class="overview" id="overview" style="margin-top:0px; padding-top:0;">
               <div class="container">
                  <div class="overview-content">
                     <h2 class="course-title">Master of <span>Business Administration</span></h2>
                     <h3>Entrepreneurship</h3>
                     <p>
                        The Master of Business Administration in Entrepreneurship provides an integrated set of learning opportunities for scholars interested in initiating self-employment as well as in mastering essential skills, knowledge and mindset in managing organizations at par with global standards. Virinchi MBA is an Asia e University degree with rigorous teaching methods to excel in modern business world. 
                     </p>
                     <p>
                        The MBA in Entrepreneurship course will shape strengths such as creative ideas, recognizing business prospects, considering your strengths and weaknesses, risk-taking and more professional actions in an aspiring entrepreneur. It is a trimester based two years program tailored for 'WORKING PROFESSIONALS' and 'ENTREPRENEURS' looking to take leaps and bounce in their career.  
                     </p>
                     <h2 class="em course-title">Learning in <span>MBA Entrepreneurship</span></h2>
                     <p>The core courses of an MBA degree offer a general understanding of skills and knowledge that are useful across all aspects of a business – including marketing, finance, accounting, and managerial skills. In MBA entrepreneurship one will need to be comfortable knowing something about everything, ranging from what kinds of markets exist for a product and what are the best available methods to advertise it, to understanding available and future finances and being able to effectively lead a team. This array of skills is crucial while planning to start up business or lead in a new initiative or department within a larger organizations.</p>
                     <p>Beyond just the theory of business building and management, students are provided insights into trends and markets and advise on solving problems and overcoming challenges. Can develop own business plans and grow personal networks of investors, partners, and professionals.</p>
                  </div>
               </div>
            </div>
            <!-- Overview End -->
            <!-- Scope -->
            <div class="scope" id="scope">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-5 col-md-6 col-12">
                        <div class="scope-content">
                           <h3 class="course-title">Scope</h3>
                           <p>
                              After MBA in Entrepreneurship, one can start own business as an entrepreneur by establishing a local small business or creating the next great tech startup. Can work as an intrapreneur in larger corporations and organizations which are always looking for leaders who are eager to start new initiatives and bring leadership to different departments. 
                           </p>
                        </div>
                     </div>
                     <div class="col-md-12 d-md-none d-block mb-4">
                        <img src="{{asset('front/assets/img/mba-scope.jpg')}}" alt="" class="img-fluid" />
                     </div>
                     <div class="scope-img">
                        <img src="{{asset('front/assets/img/mba-scope.jpg')}}" alt="" class="img-fluid" />
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
                        <div>
                           <div class="text-control-1">
                              <div class="faqs-section">
                                 <div class="faq accordion">
                                    <div class="question-wrapper">
                                       <div class="d-flex align-items-center">
                                          <p class="question" title="">Core Subjects</p>
                                       </div>
                                       <i class="material-icons drop">expand_more</i>
                                    </div>
                                    <div class="answer-wrapper">
                                       <ul class="answer-list">
                                          <li>Accounting and Finance for Managers</li>
                                          <li>Business Statistics</li>
                                          <li>Interntional Business</li>
                                          <li>Managerial Economics</li>
                                          <li>Managing People in Organization</li>
                                          <li>Marketing Management</li>
                                          <li>Project Paper (Thesis)</li>
                                          <li>Strategic Management - Asian Business</li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="faq accordion">
                                    <div class="question-wrapper">
                                       <div class="d-flex align-items-center">
                                          <p class="question" title="">Elective Subjects</p>
                                       </div>
                                       <i class="material-icons drop">expand_more</i>
                                    </div>
                                    <div class="answer-wrapper">
                                       <p class="answer pb-0 mb-0">
                                          Elective subjects extend further knowhow of the profession decided to opt by the scholars to enhance
                                          their competencies.
                                       </p>
                                       <ul class="answer-list">
                                          <li>Business Research Methods</li>
                                          <li>Corporate Communication</li>
                                          <li>Cyber Law</li>
                                          <li>Operations Management</li>
                                          <li>Project Management</li>
                                          <li>Quality and Change Management</li>
                                          <li>Risk Analysis and Management</li>
                                       </ul>
                                    </div>
                                 </div>
                                 <div class="faq accordion">
                                    <div class="question-wrapper">
                                       <div class="d-flex align-items-center">
                                          <p class="question" title="">
                                             Specialization subjects
                                          </p>
                                       </div>
                                       <i class="material-icons drop">expand_more</i>
                                    </div>
                                    <div class="answer-wrapper">
                                       <p class="answer pb-0 mb-0">
                                          Entrepreneurship, probably the best profession in global management arena has been offered in
                                          specialization area as per current business requirement and future demands.
                                       </p>
                                       <ul class="answer-list">
                                          <li>Entrepreneurship and Innovations</li>
                                          <li>Entrepreneurship Risk Management</li>
                                          <li>Supply Chain Management</li>
                                       </ul>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            <!-- Course Modules End -->
            <!-- Eligibility -->
            <div class="eligibility" id="eligibility">
               <div class="container">
                  <div class="row">
                     <div class="col-lg-9 col-md-10">
                        <h3 class="course-title"><span>Eligibility</span></h3>
                        <div class="eligibility-content saee">
                           <ul>
                               <li> Students who have completed Undergraduate Level from any stream with a score of 62.5% or 2.5 CGPA are eligible to enroll in the MBA program. </li>
                               <li> Students who have not achieved prescribed scores shall have 5 years of working experience in related fields to join the program.</li>
                           </ul>
                           
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
                     <h2>See Inside <span>MBA</span></h2>
                     <!--<h3 class="course-title"><span>See Inside MBA</span></h3>-->
                  </div>
                  <div class="gallery-content">
                     <div class="gallery-images">
                        <figure class="gallery-image gallery-image--1x1 loaded" id="image1">
                           <a href="#image1">
                              <div class="gallery-image__crop" tabindex="-1">
                                 <img class="gallery-image__media lazyloaded" alt="learning with fun" src="{{asset('front/assets/img/mba/mba-1.jpg')}}" />
                              </div>
                              <figcaption class="gallery-image__caption">
                                 Learning with fun
                              </figcaption>
                           </a>
                        </figure>
                        <figure class="gallery-image gallery-image--1x1 loaded" id="image2">
                           <a href="#image2">
                              <div class="gallery-image__crop" tabindex="-1">
                                 <img class="gallery-image__media lazyloaded" alt="7 Annual Sports Week 2022" src="{{asset('front/assets/img/mba/mba-2.jpg')}}" />
                              </div>
                              <figcaption class="gallery-image__caption">
                                 7 Annual Sports Week 2022
                              </figcaption>
                           </a>
                        </figure>
                        <figure class="gallery-image gallery-image--1x12 loaded" id="image3">
                           <a href="#image3">
                              <div class="gallery-image__crop" tabindex="-1">
                                 <img class="gallery-image__media lazyloaded" alt="During Group Presentation" src="{{asset('front/assets/img/mba/mba-3.jpg')}}" />
                              </div>
                              <figcaption class="gallery-image__caption">
                                 During Group Presentation
                              </figcaption>
                           </a>
                        </figure>
                        <figure class="gallery-image gallery-image--1x12 loaded" id="image4">
                           <a href="#image4">
                              <div class="gallery-image__crop" tabindex="-1">
                                 <img class="gallery-image__media lazyloaded" alt="MBA Graduates at Convocation 2022" src="{{asset('front/assets/img/mba/mba-4.jpg')}}" />
                              </div>
                              <figcaption class="gallery-image__caption">
                                 MBA Graduates at Convocation 2022
                              </figcaption>
                           </a>
                        </figure>
                        <figure class="gallery-image gallery-image--1x3 loaded" id="image5">
                           <a href="#image5">
                              <div class="gallery-image__crop" tabindex="-1">
                                 <img class="gallery-image__media lazyloaded" alt="Celebrating Convocation 2022" src="{{asset('front/assets/img/mba/mba-5.jpg')}}" />
                              </div>
                              <figcaption class="gallery-image__caption">
                                 MBA retreat
                              </figcaption>
                           </a>
                        </figure>
                        <figure class="gallery-image gallery-image--1x12 loaded" id="image6">
                           <a href="#image6">
                              <div class="gallery-image__crop" tabindex="-1">
                                 <img class="gallery-image__media lazyloaded" alt="Refreshment after morning class" src="{{asset('front/assets/img/mba/mba-6.jpg')}}" />
                              </div>
                              <figcaption class="gallery-image__caption">
                                 Refreshment after morning class
                              </figcaption>
                           </a>
                        </figure>
                        <figure class="gallery-image gallery-image--1x1 loaded" id="image7">
                           <a href="#image7">
                              <div class="gallery-image__crop" tabindex="-1">
                                 <img class="gallery-image__media lazyloaded" alt="Virinchians' moment" src="{{asset('front/assets/img/mba/mba-7.jpg')}}" />
                              </div>
                              <figcaption class="gallery-image__caption">
                                 Virinchians' moment
                              </figcaption>
                           </a>
                        </figure>
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
                        <a class="btn primary-btn" href="#">Visit Us  <img class="ar" src="{{asset('front/assets/img/arrow-right-white.svg')}}" style="float:right"></a>
                     </div>
                     <div class="col-md-3 text-center visit">
                        <a class="btn primary-btn" href="how-to-apply.php">Admission Information  <img class="ar" src="{{asset('front/assets/img/arrow-right-white.svg')}}" style="float:right">
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