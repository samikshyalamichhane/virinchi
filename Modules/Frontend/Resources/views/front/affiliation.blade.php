@extends('frontend::layouts.front')
@section('content')
<!-- Banner Start -->
 <div class="banner noh">
         <div class="container">
            <div class="banner-wrapper">
               <h2>Affiliation</h2>
            </div>
         </div>
      </div>
      <!-- Banner End -->
      <main>
         <!-- About Start -->
         <div class="about-virinchi">
            <div class="container">
               <div class="row">
                  <div class="col-12">
                     <div class="detail-box">
                        {!! $detail->description !!}
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <!-- About End -->
         <!-- SEVEN e -->
         {{--<div class="about-virinchi-features">
            <div class="container">
               <div class="section-title">
                  <h2><span>SEVEN' e'S</span> of AeU</h2>
               </div>
               <div class="about-feature-img mt-4">
                  <img src="{{asset('front/assets/img/seven-e.png')}}" alt="" class="img-fluid">
               </div>
               <p class="affiliation-more">
                  To know more about university. <a href="https://aeu.edu.my/discover/the-university" target="_blank">Go to link</a>
               </p>
            </div>
         </div>--}}
         <!-- SEVEN e End -->
      </main>
@endsection