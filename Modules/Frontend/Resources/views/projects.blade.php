@extends('frontend::layouts.master')
@section('title','projects')
@section('content')

 <!-- Page Header Start -->
 <div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-1 text-white animated slideInDown">Projects</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase mb-0">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item text-primary active" aria-current="page">Projects</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Project Start -->
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
                <h4 class="section-title">Our Project</h4>
                <h1 class="display-5 mb-4">Project aims to improve the living conditions of local residents</h1>
            </div>
            <div class="row g-4">
                @foreach($projects as $project)
                <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s">
                    <div class="service-item d-flex position-relative text-center h-100">
                       
                        <div class="service-text p-5">
                            <img class="mb-4" src="{{Storage::url($project->image)}}" alt="Icon">
                            <h3 class="mb-3">{{$project->title}}</h3>
                            <p class="mb-4">{{ Str::limit(html_entity_decode(strip_tags($project->description)),'200','...') }}</p>
                            <a class="btn" href="{{route('projects.detail', $project->slug)}}"><i class="fa fa-plus text-primary me-3"></i>Read More</a>
                        </div>
                    </div>
                </div>
                @endforeach
              
            </div>
        </div>
    </div>
    <!-- Project End -->

@endsection