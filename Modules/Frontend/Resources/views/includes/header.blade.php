<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Fab Lab Nepal</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('frontend/img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500;600&family=Teko:wght@400;500;600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,400;0,500;0,600;0,700;1,400&family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('frontend/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
    <link href="{{ asset('frontend/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('frontend/css/bootstrap.min.css') }}" rel="stylesheet">


    <link href="{{ asset('frontend/css/style.css') }}" rel="stylesheet">
</head>

<body>


    <header>
        <div class="container">
            <!-- Topbar Start -->
            <div class="p-0 wow fadeIn" data-wow-delay="0.1s">
                <div class="row gx-0 d-none d-lg-flex">

                    <div class="col-lg-12 px-5 text-end topinfo">
                        <div class="h-100 d-inline-flex align-items-center py-3 me-2">
                            <a class="text-body px-2" href="tel:+0123456789"><i class="fa fa-phone-alt text-primary me-2"></i>{{$dashboard_site->contact1}}</a>
                            <a class="text-body px-2" href="mailto:info@example.com"><i class="fa fa-envelope-open text-primary me-2"></i>{{$dashboard_site->email1}}</a>
                        </div>

                    </div>
                </div>
            </div>
            <!-- Topbar End -->


            <!-- Navbar Start -->
            <nav class="navbar navbar-expand-lg bg-white navbar-light sticky-top py-lg-0 px-lg-5 wow fadeIn" data-wow-delay="0.1s">
                <a href="{{route('home')}}" class="navbar-brand ms-4 ms-lg-0">
                    @if($site->header_logo)
                    <h1 class="text-primary m-0"><img class="me-3" src="{{Storage::url($site->header_logo)}}" alt="fablab logo"></h1>
                    @else
                    <h1 class="text-primary m-0"><img class="me-3" src="{{asset('frontend/img/logo.jpg')}}" alt="fablab logo"></h1>
                    @endif
                </a>
                <button type="button" class="navbar-toggler me-4" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto p-4 p-lg-0">
                        <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                        <!-- <div class="nav-item dropdown"> -->
                            <a href="{{route('about')}}" class="nav-item nav-link">About</a>
                            <!-- <div class="dropdown-menu border-0 m-0">
                                <a href="{{route('about')}}" class="dropdown-item">About Fab Lab Nepal</a>

                            </div> -->
                        <!-- </div> -->
                        <!-- <div class="nav-item dropdown"> -->
                            <a href="{{route('projects')}}" class="nav-item nav-link">Programs</a>
                            <!-- <div class="dropdown-menu border-0 m-0">
                                @foreach($dashboard_projects as $project)
                                <a href="{{route('projects.detail',$project->slug)}}" class="dropdown-item">{{ucfirst($project->title)}}</a>
                                @endforeach
                            </div> -->
                        <!-- </div> -->

                        <!-- <div class="nav-item dropdown"> -->
                            <a href="{{route('machines')}}" class="nav-item nav-link" >Machine</a>
                            <!-- <div class="dropdown-menu border-0 m-0">
                                @foreach($dashboard_machines as $machine)
                                <a href="{{route('machines.detail',$machine->slug)}}" class="dropdown-item">{{ucfirst($machine->title)}}</a>
                                @endforeach
                            </div> -->
                        <!-- </div> -->
                        <a href="{{route('contact')}}" class="nav-item nav-link">Contact</a>
                    </div>
                    
                    <a href="{{route('contact')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block" style="margin-right: 6px;">
                        Book a machine</a>
                    @if(!auth()->check())
                    <a href="{{route('customer.loginpage')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block" style="margin-right: 4px;">
                        Login</a>
                    <a href="{{route('customer.registerpage')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block"style="margin-right: 4px;">
                        Register</a>
                    @elseif(auth()->user()->hasAnyRole('customer'))
                    <a href="#" class="btn btn-primary py-2 px-4 d-none d-lg-block"><i class="fa fa-user" aria-hidden="true" style="margin-right: 4px;"></i>
                        Profile</a>
                        <a href="{{route('customerLogout')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block" style="margin-left: 4px;">
                        Logout</a>
                    @endif

                </div>
            </nav>
            <!-- Navbar End -->
        </div>
    </header>