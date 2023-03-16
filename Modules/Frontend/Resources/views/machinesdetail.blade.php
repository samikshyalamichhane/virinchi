@extends('frontend::layouts.master')
@section('title','projects')
@section('content')
 
 <!-- Page Header Start -->
  <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Project</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="{{route('machines')}}">MAchine</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">{{$machine->title}}</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Feature Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                    <h4 class="section-title">{{$machine->title}}</h4>
                    <h1 class="display-5 mb-4">{!! $machine->short_description !!}</h1>
                    <p class="mb-4">
                        {!! $machine->description!!}
                    </p>
                 
                </div>
                <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                    <div class="feature-img">
                        <img class="img-fluid" src="{{asset('frontend/img/about-2.jpg')}}" alt="">
                        <img class="img-fluid" src="{{Storage::url($machine->image)}}" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    @endsection