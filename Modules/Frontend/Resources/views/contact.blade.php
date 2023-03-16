@extends('frontend::layouts.master')
@section('title','Contact Us')
@section('content')
<!-- Page Header Start -->
<div class="container-fluid page-header py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
    <div class="container py-5">
        <h1 class="display-1 text-white animated slideInDown">Contact Us</h1>
        <nav aria-label="breadcrumb animated slideInDown">
            <ol class="breadcrumb text-uppercase mb-0">
                <li class="breadcrumb-item"><a class="text-white" href="{{route('home')}}">Home</a></li>

                <li class="breadcrumb-item text-primary active" aria-current="page">Contact Us</li>
            </ol>
        </nav>
    </div>
</div>
<!-- Page Header End -->


<!-- Contact Start -->
<div class="container-xxl py-5">
    <div class="container">
        <div class="text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 600px;">
            <h4 class="section-title">Contact Us</h4>
            <h1 class="display-5 mb-4">If You Have Any Query, Please Feel Free Contact Us</h1>
        </div>
        <div class="row g-5">
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.1s">
                <div class="d-flex flex-column justify-content-between h-100">
                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                            <i class="fa fa-map-marker-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Address</p>
                            <h3 class="mb-0">{{$site->address}}</h3>
                        </div>
                    </div>
                    <div class="bg-light d-flex align-items-center w-100 p-4 mb-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                            <i class="fa fa-phone-alt text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Call Us Now</p>
                            <h3 class="mb-0">{{$site->contact1}}</h3>
                        </div>
                    </div>
                    <div class="bg-light d-flex align-items-center w-100 p-4">
                        <div class="d-flex flex-shrink-0 align-items-center justify-content-center bg-dark" style="width: 55px; height: 55px;">
                            <i class="fa fa-envelope-open text-primary"></i>
                        </div>
                        <div class="ms-4">
                            <p class="mb-2">Mail Us Now</p>
                            <h3 class="mb-0">{{$site->email1}}</h3>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 wow fadeInUp" data-wow-delay="0.5s">
                @if($errors->any())
                <div class="alert alert-danger errorMessage">
                    <p><strong>Opps Something went wrong</strong></p>
                    <ul>
                        @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
                @if(Session::has('success'))
                <div class="alert alert-success alert-dismissible successMessage">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! Session::get('success') !!}
                </div>
                @endif
                @if(Session::has('error'))
                <div class="alert alert-danger alert-dismissible errorMessage">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    {!! Session::get('error') !!}
                </div>
                @endif
                <!-- <p class="mb-4">The contact form is currently inactive. </p> -->
                <form method="POST" action="{{ route('contactPost') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name">
                                <label for="name">Your Name</label>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email">
                                <label for="email">Your Email</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject">
                                <label for="subject">Subject</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 100px"></textarea>
                                <label for="message">Message</label>
                            </div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary w-100 py-3" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->


<!-- Google Map Start -->
<div class="container-xxl pt-5 px-0 wow fadeIn" data-wow-delay="0.1s">
    <iframe class="w-100 mb-n2" style="height: 450px;" src="{{$site->map}}" frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- Google Map End -->
@endsection
@push('scripts')
<script>
    $(document).ready(function() {
        $(".errorMessage").delay(5000).slideUp(500);
        $(".successMessage").delay(4000).slideUp(500);
    });
</script>
@endpush