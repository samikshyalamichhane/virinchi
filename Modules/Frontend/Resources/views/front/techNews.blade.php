@extends('frontend::layouts.front')
@section('content')
<div class="banner">
   <div class="container">
      <div class="banner-wrapper">
         <h2>Tech News</h2>
      </div>
   </div>
</div>
<!-- Banner End -->
<main>
   <!-- tech-news-inner Start -->
   <div class="tech-news-inner">
      <div class="container">
         <div class="tech-news-description">
            <p>
               Lorem ipsum dolor sit amet consectetur adipisicing elit. Nemo et consectetur sapiente. Sint debitis corporis, a amet odit ullam sunt voluptate quia atque eligendi reprehenderit recusandae suscipit cum maiores nam!
            </p>
         </div>
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