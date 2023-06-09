@extends('frontend::layouts.front')
@section('content')
<!-- Banner Start -->
<!-- Banner Start -->
<div class="banner noh">
   <div class="container">
      <div class="banner-wrapper">
         <h2>About Virinchi</h2>
      </div>
   </div>
</div>
<!-- Banner End -->
<main>
   <!-- About Start -->
   <div class="rs-about style2 md-pt-70 md-pb-70 clubvirinchi abtclub">
      <div class="container">
         <div class="">
            <div class="sametext naa">
               <div class="sec-title">
                  {!! $detail->description !!}
               </div>
            </div>
         </div>
      </div>
      <!-- end container -->
   </div>
   <!-- end rs-about -->
   <div class="mission">
      <div class="container">
         <div class="about-wrap">
            <div class="row">
               {{--<div class="col-lg-6 margin-minus">
                  <!-- About Content Start-->
                  <p>We focus on making students ready for change, inculcate the art of thinking innovatively to solve problems and imbibe behavioral and domain skills with a focus on values to join the workforce of a company. Moreover we are committed to produce globally competent graduates who can fit themselves in the multi-cultural environment.</p>
                  <p class="">We believe that we should be timely prepared for competitive and demanding world with ICT expertise, managerial abilities, people skills, attitude and abilities to lead, prompt decision-making abilities and sense of honoring multi-cultural values and norms. We are committed to fully groom every enrolled students.</p>
                  <!-- About Content End-->
               </div>--}}
               <div class="col-lg-6 text-center">
                  <!-- About Image Start-->
                  <div class="about-img-wrap">
                     <div class="">
                        <div class="">
                           <div class="about-img-right">
                              <div class="about-img image-2">
                                 <img class="image" src="{{Storage::url($detail->image)}}" alt="">
                                 <p>College main Building</p>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <!-- About Image End-->
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- About End -->
</main>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <img class="" alt="" src="{{asset('front/assets/img/Virinchi College_Qr (1)-page-001 (1).jpg')}}" />
      </div>
      <!--<div class="modal-footer">-->
      <!--  <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>-->
        
      <!--</div>-->
    </div>
  </div>
</div>
@endsection