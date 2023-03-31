@extends('frontend::layouts.front')
@section('content')
<!-- Banner Start -->
 <!-- Banner Start -->
      <div class="banner club">
         <div class="container">
            <div class="banner-wrapper">
               <h2>{{$detail->title}}</h2>
            </div>
         </div>
      </div>
      <!-- Banner End -->
      <main>
         <!-- ICT Mela Start -->
         <div class="rs-about style2 md-pt-70 md-pb-70 clubvirinchi im">
            <div class="container">
               <div class="">
                  <div class="sametext ">
                     <div class="sec-title">
                     {!! $detail->description !!}
                        <!--<h2><span>ICT Mela</span> (‘Mela’ is the nepali word meaning ‘FAIR’ ) is <br> an annual fest of Virinchi college to showcase the <br> talents of virinchians, by creating various Information<br> & Communication Technology (ICT) projects. </h2>-->
                        <!-- <h2><span>ICT Mela</span> is an annual fest of Virinchi college to showcase the talents of BICT students, by creating various Information & Communication Technology (ICT) projects.</h2>
                        <p> Virinchians are Creators. The Mela exhibits ICT solutions created by Bachelor of ICT (BICT) software engineering students for various day to day household and corporate problems. BICT students are indulged in making various software applications to IoT and robotics projects throughout the year. The bests are showcased in the meal. Its main aim is to expose the best of Virinchians to promote possibilities and opportunities in ICT in Nepal. It also provides a great opportunity for the younger generation who wants to make a career in the ICT sector. </p> -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
         @foreach($details as $detail)
         <div class="oppwait saa sao newtitle">
            <div class="container">
               <h2>{{$detail->title}}</h2>
               <div class="row">
                  <div class="col-md-8">
                     <div class="oppwait-left">
                       {!! $detail->description !!}
                     </div>
                  </div>
                  @if($detail->resources)
                  <div class="col-md-3 tr">
                     <h5>Top Resources</h5>
                     {!! $detail->resources !!}
                     <!-- <ul>
                        <li><span>01.</span><a href="#"><u> Smart Mirror</u></a></li>
                        <li><span>02.</span><a href="#"><u>Fire Fighting Robot</u></a></li>
                        <li><span>03.</span><a href="#"><u> Robo Ramp Race</u></a></li>
                        <li><span>04.</span><a href="#"><u> Infinity Mirror Room</u></a></li>
                        <li><span>05.</span><a href="#"><u> Holographic Display</u></a></li>
                        <li><span>06.</span><a href="#"><u> Home Automation</u></a></li>
                        <li><span>07.</span><a href="#"><u> Automated Irrigation System</u></a></li>
                        <li><span>08.</span><a href="#"><u> Hand Gesture Car</u></a></li>
                        <li><span>09.</span><a href="#"><u> Infinity Cube</u></a></li>
                        <li><span>10.</span><a href="#"><u> Squid Game</u></a></li>
                     </ul> -->
                  </div>
                  @endif
                  @if($detail->image)
                  <div class="col-md-4 nimg text-center">
                     <!--<a href="#"><img src="assets/img/Club.jpg" alt="some"></a>-->
                     <img src="{{Storage::url($detail->image)}}" alt="some">
                     <p class="mb-5">{{$detail->image_description}}</p>
                  </div>
                  @endif
               </div>
            </div>
         </div>
         @endforeach
         {{--<div class="newictmela newtitle">
            <div class="container">
               <h2>ICT Mela 1.0</h2>
               <div class="row">
                  <div class="col-md-8">
                     <p>Virinchi College organized ICT Mela 1.0 on Feb 7, 2020. It was a one-day event that was mainly focused on exhibiting ICT solutions created by our BICT Students for diverse problems. Other attractions of the event included live music, digital gaming, and ICT Quiz. Students from 8 different colleges took part in ICT Quiz.</p>
                     <p>Around 400 visitors including parents, students from various colleges, and professionals from various IT companies attended the events. This first version of the event was more focused on presenting the software solutions developed by students of various semesters. </p>
                  </div>
                  <div class="col-md-4 nimg text-center">
                     <!--<a href="#"><img src="assets/img/Club.jpg" alt="some"></a>-->
                     <img src="{{asset('front/assets/img/ICT-Mela.jpg')}}" alt="some">
                     <p>Creators of Smart House presenting at ICT Mela 1.0.</p>
                  </div>
               </div>
            </div>
         </div>--}}
         <div class="life photo-gallery ictp newinside" id="photo-gallery">
            <div class="container">
               <div class="gallery-content">
                  <h2>See Inside ICT Mela</h2>
                  <div class="gallery-images">
                     @foreach($gallery->imagess->where('publish',1) as $key=>$image)
                     <figure class="gallery-image gallery-image--1x1 loaded" id="image{{$key++}}">
                        <a href="#image{{$key++}}">
                           <div class="gallery-image__crop" tabindex="-1">
                              <img class="gallery-image__media lazyloaded" alt="{{$image->img_desc}}" src="{{Storage::url('images/gallery/'.$image->image)}}" />
                           </div>
                           <figcaption class="gallery-image__caption">
                              {{$image->img_desc}}
                           </figcaption>
                        </a>
                     </figure>
                     @endforeach
                     {{--<figure class="gallery-image gallery-image--1x1 loaded" id="image2">
                        <a href="#image2">
                           <div class="gallery-image__crop" tabindex="-1">
                              <img class="gallery-image__media lazyloaded" alt="7 Annual Sports Week 2022" src="{{asset('front/assets/img/Participants.jpg')}}" />
                           </div>
                           <figcaption class="gallery-image__caption">
                              Participants of Squid game at ICT Mela 2.0
                           </figcaption>
                        </a>
                     </figure>
                     <figure class="gallery-image gallery-image--1x12 loaded" id="image3">
                        <a href="#image3">
                           <div class="gallery-image__crop" tabindex="-1">
                              <img class="gallery-image__media lazyloaded" alt="During Group Presentation" src="{{asset('front/assets/img/Playing.jpg')}}" />
                           </div>
                           <figcaption class="gallery-image__caption">
                              Playing BUZZWIRE MAZE
                           </figcaption>
                        </a>
                     </figure>
                     <figure class="gallery-image gallery-image--1x12 loaded" id="image4">
                        <a href="#image4">
                           <div class="gallery-image__crop" tabindex="-1">
                              <img class="gallery-image__media lazyloaded" alt="MBA Graduates at Convocation 2022" src="{{asset('front/assets/img/Presenters.jpg')}}" />
                           </div>
                           <figcaption class="gallery-image__caption">
                              Presenters of FIRE FIGHTING Robot created during ICT Mela 2.0
                           </figcaption>
                        </a>
                     </figure>
                     <figure class="gallery-image gallery-image--1x3 loaded" id="image5">
                        <a href="#image5">
                           <div class="gallery-image__crop" tabindex="-1">
                              <img class="gallery-image__media lazyloaded" alt="Celebrating Convocation 2022" src="{{asset('front/assets/img/Students.JPG')}}" />
                           </div>
                           <figcaption class="gallery-image__caption">
                              Students performing during ICT Mela 1.0
                           </figcaption>
                        </a>
                     </figure>
                     <figure class="gallery-image gallery-image--1x12 loaded" id="image6">
                        <a href="#image6">
                           <div class="gallery-image__crop" tabindex="-1">
                              <img class="gallery-image__media lazyloaded" alt="Refreshment after morning class" src="{{asset('front/assets/img/Visitors.jpg')}}" />
                           </div>
                           <figcaption class="gallery-image__caption">
                              Visitors enjoying FOOT PIANO
                           </figcaption>
                        </a>
                     </figure>
                     <figure class="gallery-image gallery-image--1x1 loaded" id="image7">
                        <a href="#image7">
                           <div class="gallery-image__crop" tabindex="-1">
                              <img class="gallery-image__media lazyloaded" alt="Virinchians' moment" src="{{asset('front/assets/img/Volunteer.jpg')}}" />
                           </div>
                           <figcaption class="gallery-image__caption">
                              Volunteer monitoring ROBO RAMP RACE 1.0
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
         <!--<div class="oppwait opprev">-->
         <!--    <div class="container">-->
         <!--        <div class="row">-->
         <!--             <div class="col-md-8">-->
         <!--                <div class="row oppslider">-->
         <!--                    <div class="col-md-6">-->
         <!--                        <div class="oppbox">-->
         <!--                            <img src="assets/img/Club.jpg" alt="some">-->
         <!--                            <div class="box1 vboxes">-->
         <!--                            <h5>Resource 1</h5>-->
         <!--                            <p>Virinchi offers various other activities along with the academic programs to have proper blend in order to build the competency in graduates, which would foster them to be successful in the chosen profession.</p>-->
         <!--                            <a  class="red" href="#">Explore Research <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
         <!--                            </div>-->
         <!--                        </div>-->
         <!--                    </div>-->
         <!--                    <div class="col-md-6">-->
         <!--                        <div class="oppbox">-->
         <!--                            <img src="assets/img/ICT Mela pic.jpeg" alt="some">-->
         <!--                            <div class="box2 vboxes">-->
         <!--                            <h5>Resource 2</h5>-->
         <!--                            <p>ICT Mela (‘Mela’ is the nepali word meaning ‘FAIR’ ) is an annual fest of Virinchi college to showcase the talents of virinchians, by creating various Information & Communication Technology (ICT) projects.</p>-->
         <!--                            <a href="#" class="black">Learn More <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
         <!--                            </div>-->
         <!--                        </div>-->
         <!--                    </div>-->
         <!--                    <div class="col-md-6">-->
         <!--                        <div class="oppbox">-->
         <!--                            <img src="assets/img/Public Speaking.jpg" alt="some">-->
         <!--                            <div class="box2 box3 vboxes">-->
         <!--                            <h5>Resource 3</h5>-->
         <!--                            <p>The College’s Accounting Program stands out from peer institutions, combining certified public accountant (CPA) exam readiness with liberal arts sophistication.</p>-->
         <!--                            <a href="#" class="red">Explore Research <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
         <!--                            </div>-->
         <!--                        </div>-->
         <!--                    </div>-->
         <!--                     <div class="col-md-6">-->
         <!--                        <div class="oppbox">-->
         <!--                            <img src="assets/img/o.jpg" alt="some">-->
         <!--                            <div class="box1 vboxes">-->
         <!--                            <h5>Resource 4</h5>-->
         <!--                            <p>The College’s Accounting Program stands out from peer institutions, combining certified public accountant (CPA) exam readiness with liberal arts sophistication.</p>-->
         <!--                            <a  class="red" href="#">Explore Research <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
         <!--                            </div>-->
         <!--                        </div>-->
         <!--                    </div>-->
         <!--                </div>-->
         <!--            </div>-->
         <!--            <div class="col-md-4">-->
         <!--                <div class="oppwait-left">-->
         <!--                <span>20-Dec-2022</span>-->
         <!--                <h2>Ict-mela 1.0</h2>-->
         <!--                <p>From study abroad research and scholarship to exceptional facilities and resources,a Virinchi education is a transformative experience.</p>-->
         <!--                </div>-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </div>-->
         <!--</div>-->
         <!--<div class="oppwait">-->
         <!--    <div class="container">-->
         <!--        <div class="row">-->
         <!--            <div class="col-md-4">-->
         <!--                <div class="oppwait-left">-->
         <!--                <span>Virinchi Academics</span>-->
         <!--                <h2>Opportunities Await</h2>-->
         <!--                <p>From study abroad research and scholarship to exceptional facilities and resources,a Virinchi education is a transformative experience.</p>-->
         <!--                </div>-->
         <!--            </div>-->
         <!--             <div class="col-md-8">-->
         <!--                <div class="row oppslider">-->
         <!--                    <div class="col-md-6">-->
         <!--                        <div class="oppbox">-->
         <!--                            <img src="assets/img/Club.jpg" alt="some">-->
         <!--                            <div class="box1 vboxes">-->
         <!--                            <h5>Club</h5>-->
         <!--                            <p>Virinchi offers various other activities along with the academic programs to have proper blend in order to build the competency in graduates, which would foster them to be successful in the chosen profession.</p>-->
         <!--                            <a  class="red" href="#">Explore Research <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
         <!--                            </div>-->
         <!--                        </div>-->
         <!--                    </div>-->
         <!--                    <div class="col-md-6">-->
         <!--                        <div class="oppbox">-->
         <!--                            <img src="assets/img/ICT Mela pic.jpeg" alt="some">-->
         <!--                            <div class="box2 vboxes">-->
         <!--                            <h5>ICT Mela pic</h5>-->
         <!--                            <p>ICT Mela (‘Mela’ is the nepali word meaning ‘FAIR’ ) is an annual fest of Virinchi college to showcase the talents of virinchians, by creating various Information & Communication Technology (ICT) projects.</p>-->
         <!--                            <a href="#" class="black">Learn More <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
         <!--                            </div>-->
         <!--                        </div>-->
         <!--                    </div>-->
         <!--                    <div class="col-md-6">-->
         <!--                        <div class="oppbox">-->
         <!--                            <img src="assets/img/Public Speaking.jpg" alt="some">-->
         <!--                            <div class="box2 box3 vboxes">-->
         <!--                            <h5>Public Speaking</h5>-->
         <!--                            <p>The College’s Accounting Program stands out from peer institutions, combining certified public accountant (CPA) exam readiness with liberal arts sophistication.</p>-->
         <!--                            <a href="#" class="red">Explore Research <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
         <!--                            </div>-->
         <!--                        </div>-->
         <!--                    </div>-->
         <!--                     <div class="col-md-6">-->
         <!--                        <div class="oppbox">-->
         <!--                            <img src="assets/img/o.jpg" alt="some">-->
         <!--                            <div class="box1 vboxes">-->
         <!--                            <h5>Teach 2 Learn</h5>-->
         <!--                            <p>The College’s Accounting Program stands out from peer institutions, combining certified public accountant (CPA) exam readiness with liberal arts sophistication.</p>-->
         <!--                            <a  class="red" href="#">Explore Research <i class="fa fa-caret-right" aria-hidden="true"></i></a>-->
         <!--                            </div>-->
         <!--                        </div>-->
         <!--                    </div>-->
         <!--                </div>-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </div>-->
         <!--</div>-->
         <!--<div class="rs-testimonial main-home bg7 pt-100 pb-100 md-pt-70 md-pb-70 detail-box club-detail">-->
         <!--            <div class="container">-->
         <!--                <div class="row y-middle">-->
         <!--                    <div class="col-lg-9 md-mb-40 ">-->
         <!--                    <div class="section-title">-->
         <!--                        <h2><span>ICT Mela </span>2.0</h2>-->
         <!--                    </div>-->
         <!--                    <p>After a year gap due to the COVID-19 pandemic, Virinchi College organized its second version of ICT Mela 2.0 on April 21 till April 23. It was a 3-days exclusive event conducted at Virinchi College premise. This year ICT Mela was way more different than the first one with 20+ ICT solutions created by BICT students for various day-to-day household and corporate problems. From hand gesture controlled car to automatic plant watering system, home automation to foot piano, smart bin to water level monitoring system , firefighting robot to attendance system, buzz maze wire to smart mirror. Smart Mirror was made for the first time and exhibited in the country.</p>-->
         <!--                    <p>Major attractions include ROBO RAMP RACE where 10+ schools participated in an 80ft track with various obstacles. Visitors took the mesmerizing experience of INFINITY MIRROR ROOM with half-sized room with infinity mirror. For the first time, a squid game was organized among the visitors where the winners won cash prize of Rs.13,000. Other attractions included holographic displays, large sized infinity mirror cube, drone photo-shoot, live music and food stalls. In the span of 3 days around 2,700 visitors experienced the event. During the event various workshop and training were also conducted for the visitors by the students. From short training on finding vulnerabilities to Jarvis OS and UI/UX workshops were conducted. In the meantime, a panel discussion was conducted on the second day of event on the topic “Championing ICT Innovation through Academia” among famous ICT and engineering professionals and intellectuals from various private and government organizations of the country. The post-event exhibition was held for two weeks for the visitors.</p>-->
         <!--                </div>-->
         <!--</div>-->
         <!--</div>-->
         <!--</div>-->
         <!--        <div class="rs-testimonial main-home bg8 pt-10 pb-100 md-pt-70 md-pb-70 detail-box club-detail">-->
         <!--            <div class="container">-->
         <!--                <div class="row y-middle">-->
         <!--                    <div class="col-lg-9 md-mb-40 ">-->
         <!--                    <div class="section-title pb-20">-->
         <!--                        <h2><span>Top </span> Resources</h2>-->
         <!--                    </div>-->
         <!--                    <ul class="top-resources">-->
         <!--    <li><a href="#">Smart Mirror</a></li>-->
         <!--    <li><a href="#">Infinity Cube and Mirror room</a></li>-->
         <!--    <li><a href="#">Home Automation</a></li>-->
         <!--    <li><a href="#">Automated Plant Watering System</a></li>-->
         <!--    <li><a href="#">Firefighting Robot</a></li>-->
         <!--    <li><a href="#">Foot Piano</a></li>-->
         <!--    <li><a href="#">Attendance System</a></li>-->
         <!--    <li><a href="#">Squid Game</a></li>-->
         <!--</ul>-->
         <!--                </div>-->
         <!--</div>-->
         <!--</div>-->
         <!--</div>-->
         <!-- ICT Mela End -->
         <!-- Photo Gallery  -->
         <!--<div class="life photo-gallery pt-3">-->
         <!--    <div class="container">-->
         <!--        <div class="section-title mb-5">-->
         <!--            <h2>ICT Mela<span> PHOTOS</span></h2>-->
         <!--        </div>-->
         <!--        <div class="gallery-content">-->
         <!--            <div class="gallery-images">-->
         <!--                <figure class="gallery-image gallery-image--1x1 loaded" id="image1">-->
         <!--                    <a href="#image1">-->
         <!--                        <div class="gallery-image__crop" tabindex="-1">-->
         <!--                            <img class="gallery-image__media lazyloaded" alt="ICT Mela 2.0" src="assets/img/ict-mela/ict-1.jpg" />-->
         <!--                        </div>-->
         <!--                        <figcaption class="gallery-image__caption">-->
         <!--                            ICT Mela 2.0-->
         <!--                        </figcaption>-->
         <!--                    </a>-->
         <!--                </figure>-->
         <!--                <figure class="gallery-image gallery-image--1x1 loaded" id="image2">-->
         <!--                    <a href="#image2">-->
         <!--                        <div class="gallery-image__crop" tabindex="-1">-->
         <!--                            <img class="gallery-image__media lazyloaded" alt="ICT Mela 2.0" src="assets/img/ict-mela/ict-2.jpg" />-->
         <!--                        </div>-->
         <!--                        <figcaption class="gallery-image__caption">-->
         <!--                            ICT Mela 2.0-->
         <!--                        </figcaption>-->
         <!--                    </a>-->
         <!--                </figure>-->
         <!--                <figure class="gallery-image gallery-image--1x12 loaded" id="image3">-->
         <!--                    <a href="#image3">-->
         <!--                        <div class="gallery-image__crop" tabindex="-1">-->
         <!--                            <img class="gallery-image__media lazyloaded" alt="ICT Mela 2.0" src="assets/img/ict-mela/ict-3.jpg" />-->
         <!--                        </div>-->
         <!--                        <figcaption class="gallery-image__caption">-->
         <!--                            ICT Mela 2.0-->
         <!--                        </figcaption>-->
         <!--                    </a>-->
         <!--                </figure>-->
         <!--                <figure class="gallery-image gallery-image--1x12 loaded" id="image4">-->
         <!--                    <a href="#image4">-->
         <!--                        <div class="gallery-image__crop" tabindex="-1">-->
         <!--                            <img class="gallery-image__media lazyloaded" alt="ICT Mela 2.0" src="assets/img/ict-mela/ict-4.jpg" />-->
         <!--                        </div>-->
         <!--                        <figcaption class="gallery-image__caption">-->
         <!--                            ICT Mela 2.0-->
         <!--                        </figcaption>-->
         <!--                    </a>-->
         <!--                </figure>-->
         <!--                <figure class="gallery-image gallery-image--1x3 loaded" id="image5">-->
         <!--                    <a href="#image5">-->
         <!--                        <div class="gallery-image__crop" tabindex="-1">-->
         <!--                            <img class="gallery-image__media lazyloaded" alt="ICT Mela 2.0" src="assets/img/ict-mela/ict-5.jpg" />-->
         <!--                        </div>-->
         <!--                        <figcaption class="gallery-image__caption">-->
         <!--                            ICT Mela 2.0-->
         <!--                        </figcaption>-->
         <!--                    </a>-->
         <!--                </figure>-->
         <!--                <figure class="gallery-image gallery-image--1x12 loaded" id="image6">-->
         <!--                    <a href="#image6">-->
         <!--                        <div class="gallery-image__crop" tabindex="-1">-->
         <!--                            <img class="gallery-image__media lazyloaded" alt="ICT Mela 2.0" src="assets/img/ict-mela/ict-6.jpg" />-->
         <!--                        </div>-->
         <!--                        <figcaption class="gallery-image__caption">-->
         <!--                            ICT Mela 2.0-->
         <!--                        </figcaption>-->
         <!--                    </a>-->
         <!--                </figure>-->
         <!--                <figure class="gallery-image gallery-image--1x1 loaded" id="image7">-->
         <!--                    <a href="#image7">-->
         <!--                        <div class="gallery-image__crop" tabindex="-1">-->
         <!--                            <img class="gallery-image__media lazyloaded" alt="ICT Mela 2.0" src="assets/img/ict-mela/ict-7.jpg" />-->
         <!--                        </div>-->
         <!--                        <figcaption class="gallery-image__caption">-->
         <!--                            ICT Mela 2.0-->
         <!--                        </figcaption>-->
         <!--                    </a>-->
         <!--                </figure>-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </div>-->
         <!--</div>-->
         <!-- Photo Gallery End -->
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
<script>
   $('.oppslider').slick({
       slidesToShow: 1,
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
                   slidesToShow: 1,
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
@endpush