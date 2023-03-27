@extends('frontend::layouts.front')
@section('content')
<!-- Banner Start -->
<div class="banner club newclub">
   <div class="container">
      <div class="banner-wrapper">
         <h2>{{$detail->title}}</h2>
      </div>
   </div>
</div>
<!-- Banner End -->
<main>
   <!-- ICT Mela Start -->
   <div class="rs-about style2 md-pt-70 md-pb-70 clubvirinchi">
      <div class="container">
         <div class="">
            <div class="sametext ">
               <div class="sec-title">
                  {!! $detail->description !!}
                  {{--<h2><span>Virinchi</span> offers various activities along with the academic programs to have proper blend in order to build the competency in graduates, which would foster them to be successful in the chosen profession.</h2>
                  <!--<p>Clubs has been formed in the college to give students an opportunity to develop leadership, boost their skill and competency by organizing and carrying out college activities and service projects. In addition to planning events that contribute to college spirit and community welfare. They also help share student ideas, interests and concerns with the college community.</p>-->
                  <p>Clubs has been formed in the college to give students an opportunity to develop leadership, boost their skill and competency by organizing and carrying out college activities and service projects. In addition to planning events that contribute to college spirit and community welfare. They also help share student ideas, interests and concerns with the college community.</p>
                     --}}
               </div>
            </div>
         </div>
      </div>
   </div>
   @foreach($clubs as $club)
   <div class="eventclub ca saa newtitle va">
      <div class="container">
         <h2>{{$club->title}}</span></h2>
         <div class="row">
            <div class="col-md-7">
               {!! $club->description !!}
               {{--<p>The  aim of  this  club  is  to offer  the  ability  to  plan and  execute  major and small events   the  college. Event Management club members have the opportunity to develop managerial skills, gain experience to managing events and develop personal and professional relations. The club also aims to create   leadership   skills,   team   building   skills, interpersonal skills and social environment which encourages members to get involved in activities related to planning, organizing, directing and staffing of all events.</p>
               <p>The club creates an opportunity for mutual learning and growth. Involving a larger section of students so that they can invoke management skills and other essential qualities.</p>
               <!--<h4>Objectives</h4>-->
               <!--<div class="row">-->
               <!--<div class="col-md-1">-->
               <!--    <img src="assets/img/Hexagon.png" alt="some">-->
               <!--    </div>-->
               <!--    <div class="col-md-11">-->
               <!--    <p>To establish a platform for organizing events –and to establish a name for class of events.</p></div></div>-->
               <!--    <div class="row">-->
               <!--<div class="col-md-1">-->
               <!--    <img src="assets/img/Hexagon.png" alt="some">-->
               <!--    </div>-->
               <!--    <div class="col-md-11">-->
               <!--  <p>To create opportunities for mutual learning and growth. Involving a larger section of students so that they can invoke management skills and other essential qualities</p></div></div>-->
               <h4>Activities Covered</h4>
               <ul>
                  <li>V – Celebration</li>
                  <li>Various In-house competition among semesters</li>
                  <li>Active participation and execution in ICT Mela</li>
                  <li>Sports Week</li>
               </ul>--}}
            </div>
            <div class="col-md-5 clubimg">
               <img src="{{Storage::url($club->image)}}" alt="some">
            </div>
         </div>
      </div>
   </div>
   @endforeach
   <!--<div class="eventimg"></div>-->
   <!-- end middle section -->
   {{--<div class="rs-testimonial main-home  pt-100 pb-10 md-pt-70 md-pb-70 detail-box club-detail skillbooster saa newtitle vb">
      <div class="container">
         <h2><span>Skill Booster </span>Club</h2>
         <div class="row y-middle">
            <div class="col-lg-7 md-mb-40 clubtwo-detail">
               <div class="section-title">
                  <!--<h2><span>Skill Booster </span>Club</h2>-->
               </div>
               <p>For the all-around development of the students and to enrich their technical knowledge the college provides a platform for various students’ activities. This club envisages a conducive platform to explore students latent talents and also to enable them to come out with innovative ideas.</p>
               <p>The students are encouraged to become the member of skill booster club to help broaden their skills and horizons. The skill booster club not only help the students explore their hidden talent but also help in areas such as personality development and inculcating in the students the spirit of organization by providing them with a platform for hosting their technical talents.</p>
               <p>The club focuses primarily to help the students gain practical as well as theoretical technical knowledge. Students are provided with an opportunity to implement what they learn in their respective classroom inside and outside college.</p>
               <!--    <h4>Objectives & Activities</h4>-->
               <!--    <div class="row">-->
               <!--        <div class="col-md-1">-->
               <!--    <img src="assets/img/Hexagon.png" alt="some">-->
               <!--    </div>-->
               <!--    <div class="col-md-11">-->
               <!--    <p>To establish a platform for organizing events –and to establish a name for class of events.</p>-->
               <!--    </div>-->
               <!--</div>-->
               <h4>Activities Covered</h4>
               <ul>
                  <li>Train and conduction of Teach To Learn program</li>
                  <li>Conducting technical events such as symposiums, Quizzes and tech exhibitions</li>
                  <li>Organizing Guest Lectures, seminars and workshops</li>
               </ul>
            </div>
            <div class="col-lg-5 md-mb-40">
               <div class="testi-image skillimg newskillbooster">
                  <img src="{{asset('front/assets/img/Skill Booster Club.jpg')}}" alt="some">
               </div>
            </div>
         </div>
      </div>
   </div>--}}
   <!--<div class="eventimga"></div>-->
   {{--<div class="eventclub pc saa newtitle vc">
      <div class="container">
         <h2>Publication Club</h2>
         <div class="row">
            <div class="col-md-7">
               <p>The club offers a competing platform for the knowledge-hungry students. It promises to cultivate a passion for quizzing, debating, creative writing, literature, elocution, etc.  among the students.</p>
               <p>Publication club is to develop self-efficacy and confidence and would help to enhance the general knowledge base. It works in tandem to benefit students in the disciplines of writing and speaking by conducting events that are both instructional and enjoyable. It develops excellent communication skills and teaches students to think spontaneous. This club is also responsible for reporting all the activities being conducted at college and make an archive to be included in a semiannual newsletter. </p>
               <p>This club is also responsible for reporting all the activities being conducted at college and make an archive to be included in a semiannual newsletter.</p>
               <div class="publication">
                  <h4>Activities Covered</h4>
                  <ul>
                     <li>Newsletter</li>
                     <li>Tech News</li>
                     <li>Public Speaking Sessions</li>
                     <li>Covering all CCA and ECA activities</li>
                  </ul>
               </div>
            </div>
            <div class="col-md-5 clubimg">
               <img src="{{asset('front/assets/img/Publication-Club.jpg')}}" alt="some">
            </div>
         </div>
      </div>
   </div>--}}
   <!--<div class="eventimg"></div>-->
   {{--<div class="rs-testimonial main-home  pt-100 pb-10 md-pt-70 md-pb-70 detail-box club-detail skillbooster saa newtitle vd vr">
      <div class="container">
         <h2>Robotics and IoT Club</h2>
         <div class="row y-middle">
            <div class="col-md-7 md-mb-40 clubtwo-detail clubimgb">
               <div class="section-title">
               </div>
               <p>An emerging technological innovation, the Internet of Things (IoT),  is creating an environment of convergence in society. This technological environment brings a paradigm shift in our professional and personal life.</p>
               <p>The robotics and IoT club is an initiative taken to encourage and master the students of the Virinchi in the Internet of Things and related domains.</p>
               <p>The main idea is to develop new skills and help students to gain knowledge in the Internet of Things and robotics and also work on various related domains. This will also facilitate peer-to-peer learning among the students.</p>
               <!--<div class="read-more rcareadmore">Read More</div>-->
               <!--    <h4>Objectives</h4>-->
               <!--    <div class="row">-->
               <!--        <div class="col-md-1">-->
               <!--    <img src="assets/img/Hexagon.png" alt="some">-->
               <!--    </div>-->
               <!--    <div class="col-md-11">-->
               <!--    <p>The club primarily focuses on mastering the skills in students by conducting various hands-on sessions and  projects for ICT Mela.</p>-->
               <!--    </div>-->
               <!--</div>-->
               <!--<div class="row">-->
               <!--        <div class="col-md-1">-->
               <!--    <img src="assets/img/Hexagon.png" alt="some">-->
               <!--    </div>-->
               <!--    <div class="col-md-11">-->
               <!--    <p>Make students skillful to use  Arduino, Raspberry Pi, Automation sensors,  etc.</p>-->
               <!--    </div>-->
               <!--</div>-->
               <!--<div class="row">-->
               <!--        <div class="col-md-1">-->
               <!--    <img src="assets/img/Hexagon.png" alt="some">-->
               <!--    </div>-->
               <!--    <div class="col-md-11">-->
               <!--    <p>Host workshops in the college for skill development and experience.</p>-->
               <!--    </div>-->
               <!--</div>-->
               <!--<div class="row">-->
               <!--        <div class="col-md-1">-->
               <!--    <img src="assets/img/Hexagon.png" alt="some">-->
               <!--    </div>-->
               <!--    <div class="col-md-11">-->
               <!--    <p>Participate in technology based events organized by ICT bodies, colleges and represent our college through the club.</p>-->
               <!--    </div>-->
               <!--</div>-->
               <!-- <div class="row robo">-->
               <!--        <div class="col-md-1">-->
               <!--    <img src="assets/img/Hexagon.png" alt="some">-->
               <!--    </div>-->
               <!--    <div class="col-md-11">-->
               <!--    <p>Undertake industry-level projects that can be used in  various organizations.</p>-->
               <!--    </div>-->
               <!--</div>-->
               <h4>Activities Covered</h4>
               <ul class="ror">
                  <li>The club primarily focuses on mastering the skills in students by conducting various hands-on training and projects for ICT Mela.</li>
                  <li>Make students skillful to deploy various components like arduino, raspberry Pi, automation sensors,  etc.</li>
                  <li>Host workshops in the college for skill development and experience</li>
                  <li>Participate and represent Virinchi college in technology based events organized by various ICT bodies and institutions.</li>
                  <li>Undertake industry-level projects that can be used in various organizations.</li>
               </ul>
            </div>
            <div class="col-md-5 clubimg clubimga robot">
               <img src="{{asset('front/assets/img/Robotics and IoT Club.jpg')}}" alt="some">
            </div>
            <!--<div class="col-lg-6 md-mb-40">-->
            <!--                  <div class="testi-image skillimg">-->
            <!--                     <img src="assets/img/itc mela 2 2(1).png" alt="some">-->
            <!--                  </div>-->
            <!--                  </div>-->
         </div>
      </div>
   </div>--}}
   <!--<div class="eventimga"></div>-->
</main>
@endsection