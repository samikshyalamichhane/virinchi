<!DOCTYPE html>
<html class="no-js" lang="zxx">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="x-ua-compatible" content="ie=edge" />
  {!! SEOMeta::generate() !!}
    {!! OpenGraph::generate() !!}
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="shortcut icon" type="image/x-icon" href="{{ Storage::url($dashboard_site->fav_icon) ? Storage::url($dashboard_site->fav_icon) : asset('front/assets/img/favicon.png')}}" />

  <!-- CSS here -->
  <link rel="stylesheet" href="{{asset('front/assets/css/bootstrap.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/owl.carousel.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/themify-icons.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/slicknav.css')}}" />
  <link rel="stylesheet" href="//use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.7/css/all.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="stylesheet" href="{{asset('front/assets/css/fontawesome-all.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/swiper.min.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/slick.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/nice-select.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/style.css')}}" />
  <link rel="stylesheet" href="{{asset('front/assets/css/custom.css')}}" />
  @stack('styles')
</head>

<body>
<!-- Header Start -->
<header>
   <div class="header-area">
      <div class="main-header header-sticky">
         <div class="container">
            <div class="menu-wrapper">
               <!-- Logo -->
               <div class="logo">
                  <a href="{{route('home')}}"><img src="{{Storage::url($dashboard_site->logo) }}" alt="" class="logo-img" /></a>
               </div>
               <!-- Main-menu -->
               <div class="main-menu d-none d-lg-block">
                  <nav>
                     <ul id="navigation">
                        <li class="{{ Route::is('home')   ? 'active' : '' }}"><a href="{{route('home')}}">Home</a></li>
                        <li class="{{ Route::is('howToApply') || Route::is('courseDetail')  ? 'active' : '' }}">
                           <a href="#">Study <i class="fa fa-angle-down" aria-hidden="true"></i></a>
                           <ul class="submenu">
                              <li>
                                 <a href="#">Programs <i class="fa fa-angle-right float-right"></i></a>
                                 <ul class="submenu megamenu">
                                    @foreach($dashboard_programs as $program)
                                    <li><a href="{{route('courseDetail',$program->slug)}}">{{$program->short_title}}</a>
                                    </li>
                                    @endforeach
                                    <!-- <li><a href="{{route('mba')}}">MBA</a></li> -->
                                 </ul>
                              </li>
                              <li><a href="{{route('howToApply')}}">Admission</a></li>
                           </ul>
                        </li>
                        <li class="{{ Route::is('ictMela') || Route::is('clubs') || Route::is('college')  ? 'active' : '' }}">
                           <!--<a href="#">College <i class="fa fa-chevron-down"></i></a>-->
                           <a href="#">College <i class="fa fa-angle-down"></i></a>
                           <ul class="submenu">
                              <li><a href="{{route('college')}}">College</a></li>
                              <li><a href="{{route('ictMela')}}">ICT Mela</a></li>
                              <li><a href="{{route('clubs')}}">Clubs</a></li>
                              <!-- <li><a href="teach-to-learn.php">Teach to Learn</a></li> -->
                           </ul>
                        </li>
                        <li class="{{ Route::is('affiliation')  ? 'active' : '' }}"><a href="{{route('affiliation')}}">Affiliation</a></li>
                        <li class="{{ Route::is('aboutVIrinchi') || Route::is('smartByIntellect')  ? 'active' : '' }}">
                           <a href="#">About <i class="fa fa-angle-down"></i></a>
                           <ul class="submenu">
                              <li><a href="{{route('aboutVIrinchi')}}">About Virinchi</a></li>
                              <li><a href="{{route('smartByIntellect')}}">Smart by Intellect</a></li>
                              <!--<li><a href="collaboration.php">Collaboration</a></li>-->
                           </ul>
                        </li>
                        <li>
                           <div class="button-wrapper">
                              <a class="btn primary-btn" href="how-to-apply">Apply Now <i class="fa fa-angle-double-right"></i></a>
                           </div>
                        </li>
                     </ul>
                  </nav>
               </div>
               <!-- Header Right -->
               <div class="header-right">
                  <div class="button-wrapper">
                     <a class="btn primary-btn" href="{{route('howToApply')}}">Apply Now</a>
                  </div>
               </div>
            </div>
            <!-- Mobile Menu -->
            <div class="col-12">
               <div class="mobile_menu d-block d-lg-none"></div>
            </div>
         </div>
      </div>
   </div>
</header>
<!-- Header End -->
@yield('content')
<!-- footer start -->
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-6">
                        <div class="footer__contact fc">
                            <p>
                                {{$dashboard_site->address}}<br />
                                <i class="fa fa-phone"></i> {{$dashboard_site->contact1}}<br />
                                <i class="fa fa-envelope"></i> {{$dashboard_site->email1}}
                            </p>
                            <ul class="footer__list">
                                <li><a href="{{route('requestInfo')}}#map">Map & Direction</a></li>
                                <!--<li><a href="{{route('visitUs')}}">Visit</a></li>-->
                                <li><a href="{{route('requestInfo')}}">Request Info</a></li>
                                <li><a href="{{route('requestInfo')}}#scope">Visit</a></li>
                                <!--<li><a href="{{route('howToApply')}}">Admission</a></li>-->
                                <li><a href="{{route('requestInfo')}}#newcontact">Contact</a></li><br>
                                <!--<li><a href="#">Accreditation</a></li>-->
                                <!--<li><a href="#">Privacy</a></li>-->
                                <li><a href="{{route('socialMediaHub')}}">Social Media Hub</a></li>
                                 <!--<div class="socail-media"> -->
                                <li class="facebook"><a href="{{$dashboard_site->facebook}}" target="_blank"><i class="fa fa-facebook"></i></a></li>
                                <li class="youtube"><a href="{{$dashboard_site->youtube}}" target="_blank"><i class="fa fa-youtube-play"></i></a></li>
                                <!-- <a href="{{$dashboard_site->linkedin}}"><i class="fa fa-linkedin"></i></a> -->
                                <li class="instagram"><a href="{{$dashboard_site->instagram}}" target="_blank"><i class="fa fa-instagram"></i></a></li>
                                <li class="tiktok"><a href="{{$dashboard_site->tiktok}}" target="_blank"><i class="fab fa-tiktok"></i></a></li>
                                 <!--</div> -->
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-5">
                        <!-- <img src="assets/img/favicon.png" alt="" class="img-fluid" /> -->
                        <h5 class="footer-heading-title">VIRINCHI</h5>
                        <p class="footer-about">
                          {!! $dashboard_site->footer_desc !!}
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-3">
                <div class="row">
                    <div class="col-md-6">
                        <ul class="footer__list">
                            <li><a href="{{route('ictMela')}}">ICT Mela</a></li>
                            <li><a href="{{route('clubs')}}">Clubs</a></li>
                            <!--<li><a href="#">Careers</a></li>-->
                            
                             <li><a href="{{route('eventsListing')}}">Events</a></li>
                              <li><a href="{{route('techNews')}}">News</a></li>
                              <li><a href="{{route('howToApply')}}">FAQs</a></li>
                            <!--<li><a href="#">Downloads</a></li>-->
                            <!--<li><a href="#">Faculty</a></li>-->
                            <!--<li><a href="#">Alumni</a></li>-->
                        </ul>
                    </div>

                    <div class="col-md-6">
                        <div class="primary-btn-wrapper newfooter" style="margin-left:-38px;">
                            <!--<a href="#" class="btn secondary-btn studentlogin">Student Login <i class="ti-arrow-top-right"></i></a>-->
                            <a href="#" class="btn secondary-btn studentlogin">Student Login<img src="http://dev.virinchicollege.edu.np/front/assets/img/arrow-right.svg"></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <a href="#" class="scrollToTop"><i class="fa fa-chevron-up" aria-hidden="true"></i>
TOP</a>
</footer>
<!-- footer end -->
 <!-- JS here -->

  <!-- Jquery, Popper, Bootstrap -->
  <script src="{{asset('front/assets/js/jquery-1.12.4.min.js')}}"></script>
  <script src="{{asset('front/assets/js/popper.min.js')}}"></script>
  <script src="{{asset('front/assets/js/bootstrap.min.js')}}"></script>

  <!-- Jquery Mobile Menu -->
  <script src="{{asset('front/assets/js/jquery.slicknav.min.js')}}"></script>

  <!-- Jquery Slick , Owl-Carousel Plugins -->
  <script src="{{asset('front/assets/js/swiper.min.js')}}"></script>
  <script src="{{asset('front/assets/js/owl.carousel.min.js')}}"></script>
  <script src="{{asset('front/assets/js/slick.min.js')}}"></script>

  <!-- Scrollup, nice-select, sticky -->
  <script src="{{asset('front/assets/js/jquery.scrollUp.min.js')}}"></script>
  <script src="{{asset('front/assets/js/jquery.nice-select.min.js')}}"></script>
  <script src="{{asset('front/assets/js/jquery.sticky.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.matchHeight/0.7.2/jquery.matchHeight-min.js"></script>

  <!-- GSAP -->
  <script src="https://unpkg.co/gsap@3/dist/gsap.min.js"></script>
  <script src="https://unpkg.com/gsap@3/dist/ScrollTrigger.min.js"></script>
  <script src="https://apis.google.com/js/platform.js"></script>
  <script type="text/javascript" src="https://platform-api.sharethis.com/js/sharethis.js#property=64255fb198f2350019afb804&product=inline-share-buttons&source=platform" async="async"></script>

  <!--  main JS -->
  <script src="{{asset('front/assets/js/main.js')}}"></script>

  <script>
    const swiper = new Swiper(".testimonial__swiper", {
      loop: true,

      // Navigation arrows
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
        delay: 3000,
        disableOnInteraction: false,
        pauseOnMouseEnter: true,
      },
    });

    $(document).ready(function() {
      //events carousel
      $(".events-carousel .owl-carousel").owlCarousel({
        nav: true,
        // navText: ["<img src='myprevimage.png'>","<img src='mynextimage.png'>"],
        navText: [
          '<img src="{{asset('front/assets/img/arrow-left.svg')}}">',
          '<img src="{{asset('front/assets/img/arrow-right.svg')}}">',
        ],
        margin: 25,
        dots: false,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 30000,
        navSpeed: 2000,
        loop: true,
        responsive: {
          0: {
            items: 1,
          },
          600: {
            items: 2,
          },
          1000: {
            items: 4,
          },
        },
      });
    });
  
    $(function() {
      $(".gallery-image").click(function() {
        $(this)
          .toggleClass("gallery-image--preview")
          .siblings()
          .removeClass("gallery-image--preview");
      });
    });

    $(document).ready(function() {
      $(".list-student").click(function() {
        $("#testimonial").css({
          "background-image": "url(./assets/img/testimonial-bg3.jpg)",
        });
        $("#testimonial .testimonial-overlay").css({
          "display": "block",
          
        });
      });
      $(".list-alumni").click(function() {
        $("#testimonial").css({
          "background-image": "url(./assets/img/Alumuna.jpg)",
        //   "background-color": "gray",
        });
        //  $("#testimonial .testimonial-overlay").css({
        //   "display": "none",
          
        // });
      });
      $(".list-faculty").click(function() {
        $("#testimonial").css({
          "background-image": "url(./assets/img/testimonial-bg2.jpg)",
        });
        $("#testimonial .testimonial-overlay").css({
          "display": "block",
          
        });
      });
    });
  </script>
  <script>
     $(function() {
         $(".gallery-image").click(function() {
             $(this)
                 .toggleClass("gallery-image--preview")
                 .siblings()
                 .removeClass("gallery-image--preview");
         });
     });
     
     $(document).ready(function() {
         $(".list-student").click(function() {
             $("#testimonial").css({
                 "background-image": "url(./assets/img/testimonial-bg1.png)",
             });
         });
         $(".list-alumni").click(function() {
             $("#testimonial").css({
                 "background-image": "url(./assets/img/testimonial-bg2.jpg)",
             });
         });
         $(".list-faculty").click(function() {
             $("#testimonial").css({
                 "background-image": "url(./assets/img/testimonial-bg3.jpg)",
             });
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
  <script>
     $('.oppslider').slick({
         slidesToShow: 2,
         slidesToScroll: 1,
         autoplay: false,
         autoplaySpeed: 2000,
         swipe: false,
         infinite: true,
         dots: true,
         default: true,
         arrow: true,
         responsive: [{
                 breakpoint: 1025,
                 settings: {
                     slidesToShow: 3,
                     slidesToScroll: 1,
                     infinite: true,
                     dots: false
                 }
             },
             {
                 breakpoint: 600,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1
                 }
             },
             {
                 breakpoint: 480,
                 settings: {
                     slidesToShow: 1,
                     slidesToScroll: 1
                 }
             }
     
         ]
     });
  </script>
  
  @stack('script')
  
</body>
<div class="modal fade qrmm" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="" alt="" src="{{ Storage::url($dashboard_site->qr_image) }}" />
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        
      <!--</div>-->
    </div>
  </div>
</div>
</html>