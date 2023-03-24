@extends('frontend::layouts.front')
@section('content')
<!-- Banner Start -->
<!-- Banner Start -->
      <div class="banner newsmartbanner">
         <div class="container">
            <div class="banner-wrapper">
               <h2>Smart By Intellect</h2>
            </div>
         </div>
      </div>
      <!-- Banner End -->
      <main>
         <!-- Our Mission Start -->
         <!--        <div class="mission mt-5">-->
         <!--            <div class="container">-->
         <!--                <div class="overview-content">-->
         <!--                    <div class="row pt-100">-->
         <!--                    <div class="col-md-6 club-detail">-->
         <!--                    <div class="sec-title">-->
         <!--                    <span class="sub-text big">Smart - perhaps a cliché today, for us, it’s the goal - to make our students smart to create an accomplished life. Once a Virinchian, you are set for a wonderful career as an entrepreneur or highly sought human resource.</span>-->
         <!--                                </div>-->
         <!--                    <p>-->
         <!--                        Every day at Virinchi is brick by brick accumulation of knowledge and experience in a pleasant environment. We design each brick with utmost sincerity and thoughtfulness so that these add to the pupil’s intellectuality to solve complex of problems at ease, professionally and personally.-->
         <!--                    </p>-->
         <!--                    <p>-->
         <!--                        At each touch point, be it with infrastructure of the college or teachers or peers, we ensure, each individual brings change in oneself so that one’s cognitive ability is at its best. We promote team work, and our students are best performers in any team. We don’t just talk about creativity, we have courses designed to teach students how one can be creative.-->
         <!--                    </p>-->
         <!--                    <p>-->
         <!--                        The goal is accomplished by making each student continuous participation, practice and improvisation through under given programs;-->
         <!--                    </p>-->
         <!--</div>-->
         <!--<div class="col-lg-6">-->
         <!--                                        <div class="single-about-img">-->
         <!--                                            <img src="assets/img/life/life-1.jpg" alt="about" width="500" height="500">-->
         <!--                                        </div>-->
         <!--                                    </div>-->
         <!--                    </div>-->
         <!--                    </div>-->
         <!--                </div>-->
         <!--            </div>-->
         <!--        </div>-->
         <div class="rs-about style2 md-pt-70 md-pb-70 clubvirinchi nok">
            <div class="container">
               <div class="">
                  <div class="sametext nosame">
                     <div class="sec-title">
                     {!! $detail->description !!}
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- Our Mission End -->
         <div class="oppwait oppm newsmart marbtn50" style="margin-bottom:50px;">
            <div class="container">
               <div class="row">
                  <div class="col-md-4">
                     <div class="oppwait-left">
                        <div class="section-title">
                           <h2>Experience <br>Virinchi</h2>
                        </div>
                        <p>The goal is accomplished by making each student continuous participation, practice and improvisation under these activities.</p>
                     </div>
                  </div>
                  <div class="col-md-8">
                     <div class="row oppslider">
                        @foreach($experiences as $experience)
                        <div class="col-md-6">
                           <div class="oppbox">
                              <img src="{{Storage::url($experience->image)}}" alt="some">
                              <div class="box1 vboxes">
                                 <h5>{{$experience->title}}</h5>
                                 {!! $experience->description !!}
                                 @if($experience->link)
                                 <a  class="red" href="{{$experience->link}}" role="button">Learn More <img class="ar" src="http://dev.virinchicollege.edu.np/front/assets/img/arrow-right.svg"></a>
                                 @endif
                              </div>
                           </div>
                        </div>
                        @endforeach
                        {{--<div class="col-md-6">
                           <div class="oppbox">
                              <img src="{{asset('front/assets/img/ICT Mela pic.jpeg')}}" alt="some">
                              <div class="box2 vboxes">
                                 <h5>ICT Mela</h5>
                                 <p>ICT Mela (‘Mela’ is the nepali word meaning ‘FAIR’ ) is an annual fest of Virinchi college to showcase the talents of virinchians, by creating various Information & Communication Technology (ICT) projects.</p>
                                 <a href="{{route('ictMela')}}" class="black" role="button">Learn More <img class="ar" src="http://dev.virinchicollege.edu.np/front/assets/img/arrow-right-white.svg"></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="oppbox">
                              <img src="{{asset('front/assets/img/teach.jpg')}}" alt="some">
                              <div class="box1 vboxes">
                                 <h5>Teach To Learn</h5>
                                 <p>Teach to Learn is a CRS initiative of college and virinchians to conduct various
                                    workshops and knowledge sharing session among the ICT aspiring students of
                                    secondary level.
                                 </p>
                                 <a  class="red" href="#" role="button">Learn More <img class="ar" src="{{asset('front/assets/img/arrow-right.svg')}}"></a>
                              </div>
                           </div>
                        </div>
                        <div class="col-md-6">
                           <div class="oppbox">
                              <img src="{{asset('front/assets/img/Public Speaking.jpg')}}" alt="some">
                              <div class="box2 box3 vboxes">
                                 <h5>Public Speaking</h5>
                                 <p>Public speaking session are conducted for all semesters’ BICT students to develop their
                                    communication skill in a structured and deliberate manner intended to inform, persuade,
                                    or entertain the listeners.
                                 </p>
                                 <!--<a href="#" class="black" role="button">Learn More <img class="ar" src="{{asset('front/assets/img/arrow-right-white.svg')}}"></a>-->
                              </div>
                           </div>
                        </div>--}}
                        
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </main>
@endsection