@extends('frontend::layouts.front')
@section('content')

<div class="banner noh">
   <div class="container">
      <div class="banner-wrapper">
         <h2>Events</h2>
      </div>
   </div>
</div>
<!-- Banner End -->

<main>

   <!-- Events-inner Start -->
   <!--<div class="event-inner">-->
   <!--    <div class="container">-->
   <!--        <div class="row">-->
   <!--            <div class="col-md-4 col-sm-12 mx-auto mb-4">-->
   <!--                <div class="card event__card">-->
   <!--                    <a href="#">-->
   <!--                        <img src="{{asset('front/assets/img/news-3.jpg')}}" alt="" class="card-img img-fluid event-img">-->
   <!--                        <h6>-->
   <!--                            Project proposal writing workshop-->
   <!--                        </h6>-->
   <!--                    </a>-->
   <!--                    <p class="event-info">-->
   <!--                        Virinchi College is going to organize a proposal writing workshop for the students of the 7th semester. The purpose of this Workshop is to build the skills of Participants on how to write proposals for ICT projects.-->
   <!--                        The workshop will also give participants the resource needed to improve the quality of Project design and proposal writing. This Workshop includes guidance, templates, and tools for project design from developing a concept note through the writing a project proposal.-->

   <!--                    </p>-->
   <!--                    <div class="event__card--date">-->
   <!--                        <p>NOV<span>01</span></p>-->
   <!--                    </div>-->
   <!--                </div>-->
   <!--            </div>-->

   <!--            <div class="col-md-4 col-sm-12 mx-auto mb-4">-->
   <!--                <div class="card event__card">-->
   <!--                    <a href="#">-->
   <!--                        <img src="{{asset('front/assets/img/news-1.jpg')}}" alt="" class="card-img img-fluid event-img">-->
   <!--                        <h6>-->
   <!--                            A practical guide to Git and Github - Nov 7-->
   <!--                        </h6>-->
   <!--                    </a>-->
   <!--                    <p class="event-info">-->
   <!--                        Virinchi Skill Booster Club is conducting the workshop on GitHub for the students of the 2nd Semester. This session is a part of the teach to learn(TTL) initiative of Virinchi College where students share their skills and knowledge with their juniors.-->
   <!--                    </p>-->
   <!--                    <div class="event__card--date">-->
   <!--                        <p>NOV<span>01</span></p>-->
   <!--                    </div>-->
   <!--                </div>-->
   <!--            </div>-->

   <!--            <div class="col-md-4 col-sm-12 mx-auto mb-4">-->
   <!--                <div class="card event__card">-->
   <!--                    <a href="#">-->
   <!--                        <img src="{{asset('front/assets/img/news-2.jpg')}}" alt="" class="card-img img-fluid event-img">-->
   <!--                        <h6>-->
   <!--                            7-day sports week held - 4th July to 10 July 2022-->
   <!--                        </h6>-->
   <!--                    </a>-->
   <!--                    <p class="event-info">-->
   <!--                        Virinchi events club organized a seven-day sports week from 4th July till 10th July. The event was attended by over 100 male and female students who participated in various indoor and outdoor games like basketball, chess, table tennis, futsal, badminton and cricksal. Various teams from different semester from BICT and MBA took part in the event including faculty members as well.-->
   <!--                    </p>-->
   <!--                    <div class="event__card--date">-->
   <!--                        <p>NOV<span>01</span></p>-->
   <!--                    </div>-->
   <!--                </div>-->
   <!--            </div>-->



   <!--        </div>-->
   <!--    </div>-->
   <!--</div>-->
   @foreach($events as $event)
   <div class="eventclub ca saa newtitle va eventlisting nnev">

      <div class="container">
         <h6>{{ \Carbon\Carbon::parse($event->from_date)->isoFormat('MMM Do')}}@if($event->to_date)-{{ \Carbon\Carbon::parse($event->to_date)->isoFormat('Do')}},@endif {{ \Carbon\Carbon::parse($event->from_date)->isoFormat('YYYY')}}</h6>
         <h2>RRR 2.0 Tournament</h2>

         <div class="row y-middle">
            <div class="col-lg-9 md-mb-40 clubtwo-detail">
               <div class="section-title">
                  <!--<h2><span>Skill Booster </span>Club</h2>-->
               </div>
               <p>RRR (Robo Ramp Race) 2.0 is one of the major event of ICT Mela. Various school team participates and compete with remote controlled robotic car developed by themselves in the tournament. This is second edition going to held in 100+ ft. track with various difficulties and obstacles including zipline and surveillance monitored tunnel will give thrilling experience to participants and audiences. </p>
            </div>
            <div class="col-lg-3 md-mb-40">
               <div class="testi-image skillimg newskillbooster robo">
                  <img src="{{Storage::url($event->image)}}" alt="" class="">
               </div>
            </div>
         </div>
      </div>
   </div>
   @endforeach
   <!--<div class="eventimg"></div>-->
   <!-- end middle section -->
   {{--<div class="rs-testimonial main-home  pt-100 pb-10 md-pt-70 md-pb-70 detail-box club-detail skillbooster saa newtitle vb nnev pt-5">
      <div class="container">
         <h6>January 27 – 29, 2023</h6>
         <h2>ICTmela 3.0</span></h2>
         <div class="row">
            <div class="col-md-9">
               <p>The third edition of ICT Mela is a must visit for information technology enthusiasts and students to explore fields for higher study, to be held at Virinchi College premise at Kumaripati, Lalitpur. It is the mega event organized by Virinchi College to showcase the Information and Communication Technology solutions developed by BICT students to facilitate our day to day life. ICT Mela 3.0 is platform to explore, play and enjoy.</p>
            </div>
            <div class="col-md-3 clubimg">

               <img src="{{asset('front/assets/img/ree.jpeg')}}" alt="" class="">
            </div>
         </div>
      </div>
   </div>--}}
   <!--<div class="eventimga"></div>-->
   <!--<div class="eventclub pc saa newtitle vc nnev">-->
   <!--   <div class="container">-->
   <!--      <h2>7-Day Sports Week Held - 4th July To 10 July 2022</h2>-->

   <!--      <div class="row">-->
   <!--         <div class="col-md-7">-->
   <!--            <p>-->
   <!--                             Virinchi events club organized a seven-day sports week from 4th July till 10th July. The event was attended by over 100 male and female students who participated in various indoor and outdoor games like basketball, chess, table tennis, futsal, badminton and cricksal. Various teams from different semester from BICT and MBA took part in the event including faculty members as well.-->
   <!--                         </p>-->
   <!--            </div>-->

   <!--         <div class="col-md-5 clubimg">-->
   <!--            <img src="http://dev.virinchicollege.edu.np/front/assets/img/news-2.jpg" alt="" class="">-->
   <!--         </div>-->
   <!--      </div>-->
   <!--   </div>-->
   <!--</div>-->
   <!-- Events-inner End -->



</main>

@endsection