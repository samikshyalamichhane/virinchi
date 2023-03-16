@extends('frontend::layouts.master')
@section('title','projects')
@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/css/lightbox.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.8.2/js/lightbox.min.js"></script>
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
  <div class="container py-5">
    <h1 class="display-1 text-white animated slideInDown">Project</h1>
    <nav aria-label="breadcrumb animated slideInDown">
      <ol class="breadcrumb text-uppercase mb-0">
        <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
        <li class="breadcrumb-item"><a class="text-white" href="{{route('projects')}}">Project</a></li>
        <li class="breadcrumb-item text-primary active" aria-current="page">{{$project->title}}</li>
      </ol>
    </nav>
  </div>
</div>
<!-- Page Header End -->


<!-- Feature Start -->
<div class="container-xxl py-5">
  <div class="container">
    <div class="row g-5">
      <div class="col-lg-8 wow fadeInUp" data-wow-delay="0.1s">
        <h4 class="section-title">{{$project->title}}</h4>
        <h1 class="display-5 mb-4">{!! $project->short_description !!}</h1>

        <ul class="nav nav-tabs" id="myTab" role="tablist">
          <li class="nav-item" role="presentation">
            <button class="nav-link active" id="home-tab" data-bs-toggle="tab" data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">Overview</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Activities</button>
          </li>
          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact" type="button" role="tab" aria-controls="contact" aria-selected="false">Donor Partners</button>
          </li>

          <li class="nav-item" role="presentation">
            <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#gallery" type="button" role="tab" aria-controls="contact" aria-selected="false">Gallery</button>
          </li>
        </ul>
        <div class="tab-content" id="myTabContent">
          <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
            <p><strong>Project Overview:</strong></p>

            {!! $project->overview !!}

            <!-- <p><img alt="" src="https://fablab1.webhouse.com.np/storage/uploads/RA_Engineering_Photo-Overview_1651123706.jpg" style="height:300px; width:400px"></p> -->


          </div>
          <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">{!! $project->activities !!}</div>
          <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">{!! $project->donor_partners !!}</div>
          <div class="tab-pane fade" id="gallery" role="tabpanel" aria-labelledby="contact-tab">
            <div class="lightbox-gallery">
              <div class="container">

                <div class="row photos">
                  @forelse($project->projectGalleries as $gallery)
                  <div class="col-sm-6 col-md-6 col-lg-6 item"><a href="{{ $gallery->imageUrl('file') }}" target="__blank" data-lightbox="photos"><img class="img-fluid" src="{{ $gallery->imageUrl('file') }}"></a></div>
                  @empty
                  <div class="col-sm-6 col-md-6 col-lg-6 item">No Images Found in Gallery</div>
                  @endforelse
                </div>
              </div>



            </div>
          </div>




          <p class="mb-4">
            
          </p>


          <div class="col-lg-4 wow fadeInUp" data-wow-delay="0.5s">
            <div class="feature-img">
              <!--<img class="img-fluid" src="{{asset('frontend/img/about-2.jpg')}}" alt="">-->
              <img class="img-fluid" src="{{Storage::url($project->image)}}" alt="">
            </div>
          </div>





        </div>

      </div>



    </div>
  </div>
  <!-- Feature End -->

  @endsection