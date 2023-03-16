 <!-- Footer Start -->

    <footer>
    <div class="container-fluid bg-dark text-body footer pt-5 px-0 wow fadeIn" data-wow-delay="0.1s"
       >
        <div class="container py-5">
            <div class="row g-5">


              

                <div class="col-lg-4 col-md-6">
                   @if($site->footer_logo)
                    <h3 class="text-light mb-4"><img src="{{Storage::url($site->footer_logo)}}"></h3>
                    @else
                    <h3 class="text-light mb-4"><img src="{{asset('frontend/img/logo.jpg')}}"></h3>
                    @endif
                    <p>
                        {{$site->footer_desc}}
                    </p>
                 
                </div>
            
                <div class="col-lg-4 col-md-6">
                    <h3 class="text-light mb-4">Quick Links</h3>
                    <a class="btn btn-link" href="{{route('home')}}">Home</a>
                    <a class="btn btn-link" href="{{route('about')}}">About Us</a>
                    <a class="btn btn-link" href="{{route('projects')}}">Programes</a>
                    <a class="btn btn-link" href="{{route('machines')}}">Machines</a>
                    <a class="btn btn-link" href="{{route('contact')}}">Contact Us</a>
                </div>

                <div class="col-lg-4 col-md-6">
                    <h3 class="text-light mb-4">Address</h3>
                    <p class="mb-2"><i class="fa fa-map-marker-alt text-primary me-3"></i>{{$site->address}}</p>
                    <p class="mb-2"><i class="fa fa-phone-alt text-primary me-3"></i>{{$site->contact1}}</p>
                    <p class="mb-2"><i class="fa fa-envelope text-primary me-3"></i>{{$site->email1}}</p>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-body me-1" href="{{$site->twitter}}"><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href="{{$site->facebook}}"><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-body me-1" href="{{$site->youtube}}"><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-body me-0" href="{{$site->linkedin}}"><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
           
            </div>
        </div>
        <div class="container-fluid copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a href="#">Fablab</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                      
                        Designed By <a href="#">Webhouse Nepal</a>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('frontend/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/counterup/counterup.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/owlcarousel/owl.carousel.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/tempusdominus/js/moment.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/tempusdominus/js/moment-timezone.min.js') }}"></script>
    <script src="{{ asset('frontend/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('frontend/js/main.js') }}"></script>
</body>

</html>