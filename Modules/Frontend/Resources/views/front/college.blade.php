@extends('frontend::layouts.front')
@section('content')
<!-- Banner Start -->
<div class="banner colz">
         <div class="container">
            <div class="banner-wrapper">
               <h2>College</h2>
            </div>
         </div>
      </div>
      <!-- Banner End -->
      <main>
         <!-- College Start -->
         <section class="college">
         <div class="container">
            <div class="row">
               <div class="sametext nosame">
                  <div class="college-info">
                     <div class="college-info-box">
                        {!! $detail->description !!}
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- counter -->
         <section class="progress-bar-wrap1">
            <div class="">
               <div class="no-gutters">
                  <div class="progress-bar-box1 progress-bar-box3 newprogress">
                     <div class="container">
                        <h2 class="section-title">Our Expertise &amp; Skills to All</h2>
                        <div class="row text-center">
                           <div class="col-md-2 col-sm-6">
                              <div class="college-card card">
                                 <div class="college-counter-wp">
                                    <h2 class="college-counter-title">Graduate<br> on Time</h2>
                                 </div>
                                 <div class="college-counter-number">
                                    <span class="counter">{{$college->graduate_on_time}}</span>%
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2 col-sm-6">
                              <div class="college-card card">
                                 <div class="college-counter-wp">
                                    <h2 class="college-counter-title">Industry Readiness</h2>
                                 </div>
                                 <div class="college-counter-number">
                                    <span class="counter">{{$college->industry_readiness}}</span>%
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-2 col-sm-6">
                              <div class="college-card card">
                                 <div class="college-counter-wp">
                                    <h2 class="college-counter-title">Graduate Employed</h2>
                                 </div>
                                 <div class="college-counter-number">
                                    <span class="counter">{{$college->graduate_employed}}</span>%
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
            </div>
         </section>
         <div class="whoffer ooog">
            <div class="container">
               <h2 class="course-title mod">Education <span>Model</span></h2>
               {!! $college->education_model_description !!}
               <div class="row mb-5">
                  @foreach($details as $data)
                  <div class="col-md-4">
                     <div class="content offerimg oppbox">
                        <a href="#" target="_blank">
                           <div class="content-overlay"></div>
                           <img class="content-image" src="{{Storage::url($data->image)}}">
                           <div class="content-details fadeIn-bottom">
                              <h5 class="content-title">{{$data->title}}</h5>
                           </div>
                        </a>
                     </div>
                     <!--<div class="offerimg oppbox">-->
                     <!--    <img src="assets/img/Practicing Professional.jpeg" alt="some">-->
                     <!--</div>-->
                     <div class="offerdetail box2 vboxes od">
                        {!! $data->description !!}
                        <!--<div class="read-more">Read More</div>-->
                     </div>
                  </div>
                  @endforeach
                  {{--<div class="col-md-4">
                     <div class="content offerimg oppbox">
                        <a href="#" target="_blank">
                           <div class="content-overlay"></div>
                           <img class="content-image" src="{{asset('front/assets/img/Industry Readiness.jpeg')}}">
                           <div class="content-details fadeIn-bottom">
                              <h5 class="content-title">Industry Readiness</h5>
                           </div>
                        </a>
                     </div>
                     <div class="offerdetail box3 vboxes nbox">
                        <p>We bridge education to workforce for students. Virinchi College offers special courses that enables our students to develop the range of skills to become industry ready. These hands on trainings are based on future demands, business requirements<br>and features of programing languages.</p>
                     </div>
                  </div>
                  <div class="col-md-4">
                     <div class="content offerimg oppbox">
                        <a href="#" target="_blank">
                           <div class="content-overlay"></div>
                           <img class="content-image" src="{{asset('front/assets/img/Curriculum for Skill Enhancement.jpg')}}">
                           <div class="content-details fadeIn-bottom">
                              <h5 class="content-title">Curriculum for Skill Enhancement</h5>
                           </div>
                        </a>
                     </div>
                     <div class="offerdetail box1 vboxes">
                        <p>Our curriculum helps faculties stay at the forefront of innovation so that they can equip students with the skills they need to get<br> hired in one of the fastest-growing industries.</p>
                     </div>
                  </div>--}}
               </div>
            </div>
         </div>
         <!-- counter -->
         <!-- counter -->
         <!--        <div class="about-virinchi bg8">-->
         <!--            <div class="container">-->
         <!--                <div class="row">-->
         <!--                    <div class="col-8">-->
         <!--                        <div class="detail-box">-->
         <!--                            <div class="section-title">-->
         <!--                                <h2>Education<span> Model</span></h2>-->
         <!--                            </div>-->
         <!--                            <p>-->
         <!--                                Today’s students must have competency to be able to compete in the highly competitive global economy. The student of today needs to be more job ready and know more than just theories if they are to compete for the jobs of tomorrow. Exactly how this unique perspective has shaped the education model to transform students to workforce at Virinchi College. Our education model is driven towards:-->
         <!--                            </p>-->
         <!--                            <div id="accordion" class="accordion">-->
         <!--    <div class="card mb-0">-->
         <!--        <div class="card-header collapsed" data-toggle="collapse" href="#collapseOne">-->
         <!--            <a class="card-title">-->
         <!--            Industry Readiness-->
         <!--            </a>-->
         <!--        </div>-->
         <!--        <div id="collapseOne" class="card-body collapse" data-parent="#accordion" >-->
         <!--            <p>We bridge education to workforce for students. Virinchi College offers special courses that enables BICT students to develop the range of skills to become industry ready. These hands on lab are based on future demands, business requirements and features of programing languages.-->
         <!--            </p>-->
         <!--        </div>-->
         <!--        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">-->
         <!--            <a class="card-title">-->
         <!--            Practicing Professionals-->
         <!--            </a>-->
         <!--        </div>-->
         <!--        <div id="collapseTwo" class="card-body collapse" data-parent="#accordion" >-->
         <!--            <p>We bring industry experience in to the classroom. Our faculties are Practicing ICT experts with industrial experience bringing a real world perspective in BICT program. The vast majority of students will begin careers in industry after graduation and therefore would benefit from the experience and lessons learned from those who have really encountered the problems while functioning as a full time practicing professionals. ICT experts who are from industry are also able to relate with industrial partners more easily. They “talk their language” and can therefore help forge additional bonds with industry.d of them accusamus labore sustainable VHS.-->
         <!--            </p>-->
         <!--        </div>-->
         <!--        <div class="card-header collapsed" data-toggle="collapse" data-parent="#accordion" href="#collapseThree">-->
         <!--            <a class="card-title">-->
         <!--            Curriculum for Skill Enhancement-->
         <!--            </a>-->
         <!--        </div>-->
         <!--        <div id="collapseThree" class="collapse" data-parent="#accordion" >-->
         <!--            <div class="card-body">Our curriculum helps faculties stay at the forefront of ICT innovation so that they can equip students with the skills they need to get hired in one of the fastest-growing industries.-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </div>-->
         <!--</div>-->
         <!--                        </div>-->
         <!--                    </div>-->
         <!--                </div>-->
         <!--            </div>-->
         <!--        </div>-->
         <!--    </section>-->
         <!-- College End -->
      </main>
@endsection