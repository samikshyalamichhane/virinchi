@extends('frontend::layouts.front')
@section('content')
<div class="banner noh">
   <div class="container">
      <div class="banner-wrapper">
         <h2>Tech News</h2>
      </div>
   </div>
</div>
<!-- Banner End -->
<main>
   <!-- Details Start -->
   <div class="tech-news-details">
      <div class="container">
         <!--<iframe width="100%" height="500" src="https://www.youtube.com/embed/oZ-BAEx1yIo" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
         <iframe width="100%" height="500" src="https://www.youtube.com/embed/IGOx70PxpIE" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
         <div class="button-wrapper nbw yv">
                     <a class="btn primary-btn" href="https://youtu.be/IGOx70PxpIE">Subscribe Now</a>
                  </div>

      </div>
   </div>
   <!-- Details End -->
   <!-- tech-news-inner Start -->
   <div class="tech-news-inner">
      <div class="container">
         <h3 class="course-title">More <span>Tech News</span></h3>
         <div class="row">
            <div class="col-md-4 col-sm-6 mb-4">
               <a href="tech-news-details.php">
                  <div class="tech-news-card">
                     <img src="https://img.youtube.com/vi/rRZfY6s9gkM/hqdefault.jpg" alt="" class="img-fluid tech-img" />
                  </div>
                  <h4 class="tech-news-title">Virinchi Tech News| Platform the Canva</h4>
               </a>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
               <a href="tech-news-details1.php">
                  <div class="tech-news-card">
                     <img src="https://img.youtube.com/vi/oZ-BAEx1yIo/hqdefault.jpg" alt="" class="img-fluid tech-img" />
                  </div>
                  <h4 class="tech-news-title">Virinchi Tech News| Web 3.0</h4>
               </a>
            </div>
            <div class="col-md-4 col-sm-6 mb-4">
               <a href="tech-news-details2.php">
                  <div class="tech-news-card">
                     <img src="https://img.youtube.com/vi/a8QkEz06gCM/hqdefault.jpg" alt="" class="img-fluid tech-img" />
                  </div>
                  <h4 class="tech-news-title">Virinchi Tech News| Robotic Process Automation</h4>
               </a>
            </div>
         </div>
      </div>
   </div>
   <!-- tech-news-inner End -->
</main>
@endsection