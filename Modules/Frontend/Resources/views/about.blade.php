@extends('frontend::layouts.master')
@section('title','About Us')
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">About Us</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <!-- <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li> -->
                    <li class="breadcrumb-item text-primary active" aria-current="page">About</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- About Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <div class="about-img">
                        <img class="img-fluid" src="{{asset('frontend/img/laboratory.jpg')}}" alt="">
                        <img class="img-fluid" src="{{Storage::url($site->about_us_image)}}" alt="">
                    </div>
                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h4 class="section-title">About Us</h4>
                    <h1 class="display-5 mb-4">{{$site->about_us_title}}</h1>
                    <p>{!!$site->about_us_desc!!}</p>
                    <div class="d-flex align-items-center mb-5">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center border border-5 border-primary" style="width: 120px; height: 120px;">
                            <h1 class="display-1 mb-n2" data-toggle="counter-up">{{$site->working_exp}}</h1>
                        </div>
                        <div class="ps-4">
                            <h3>Years</h3>
                            <h3>Working</h3>
                            <h3 class="mb-0">Experience</h3>
                        </div>
                    </div>
                   
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">Why Choose Us!</h4>
                    <h1 class="display-5 mb-4">{{$site->why_choose_us_title}}</h1>
                    <p class="mb-4">
                    {!! $site->why_choose_us_desc !!}
                    </p>
               
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{asset('frontend/img/about-2.jpg')}}" alt="">
                        <img class="img-fluid" src="{{Storage::url($site->why_choose_us_image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->
    
@endsection

<script>
    $(document).ready(function(){
        $(".testimonial-carousel .owl-carousel").owlCarousel({
            nav: true,
            navText: [
                '<i class="fa fa-angle-left"></i>',
                '<i class="fa fa-angle-right"></i>'
            ],
            margin:20,
            dots: false,
            responsiveClass: true,
            autoplay: false,
            autoplaySpeed: 3000,
            navSpeed: 2000,
            loop: true,
            responsive:{
                0:{
                    items:1,
                },
                600:{
                    items:1,
                },
                1000:{
                    items:1,
                }
            }
        });
    });

</script>
