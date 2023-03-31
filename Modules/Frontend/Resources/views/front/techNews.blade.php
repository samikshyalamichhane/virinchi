@extends('frontend::layouts.front')
@section('content')
<div class="banner">
   <div class="container">
      <div class="banner-wrapper">
         <h2>{{$detail->title}}</h2>
      </div>
   </div>
</div>
<!-- Banner End -->
<main>
   <!-- tech-news-inner Start -->
   <div class="tech-news-inner">
      <div class="container">
         <div class="tech-news-description">
            {!! $detail->description !!}
         </div>
         <div class="row">
            @foreach($techNews as $news)
            <div class="col-md-4 col-sm-6 mb-4">
               <a href="{{route('techNewsDetail',$news->slug)}}">
                  <div class="tech-news-card">
                     <img src="https://img.youtube.com/vi/{{$news->youtubeVideo($news->video)}}/0.jpg" alt="" class="img-fluid tech-img" />
                  </div>
                  <h4 class="tech-news-title">{{$news->title}}</h4>
               </a>
            </div>
            @endforeach
            {{--<div class="col-md-4 col-sm-6 mb-4">
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
            </div>--}}
         </div>
      </div>
   </div>
   <!-- tech-news-inner End -->
</main>
@endsection