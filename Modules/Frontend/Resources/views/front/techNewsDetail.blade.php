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
            <!--<iframe width="100%" height="500" src="https://www.youtube.com/watch?v=7AW97Or_Quk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>-->
            <iframe width="100%" height="500" src="{{$news->video}}" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            <div class="row">
            <div class="col-md-3 button-wrapper nbw yv">
                <!--<div class="g-ytsubscribe" data-channelid="UC6capKoPkfIdyQEk76Yhbcg" data-layout="full" data-theme="dark" data-count="hidden"></div>-->
                <a class="btn primary-btn" href="https://youtu.be/{{$news->youtubeVideo($news->video)}}">Subscribe Now</a>
            </div>
            <div class="col-md-9 sharethis-inline-share-buttons"></div>
            </div>
        </div>
    </div>
    <!-- Details End -->
    <!-- tech-news-inner Start -->
    <div class="tech-news-inner">
        <div class="container">
            <h3 class="course-title">More <span>Tech News</span></h3>
            <div class="row">
                @foreach($moreTechNews as $new)
                <div class="col-md-4 col-sm-6 mb-4">
                    <a href="{{route('techNewsDetail',$new->slug)}}">
                        <div class="tech-news-card">
                            <img src="https://img.youtube.com/vi/{{$new->youtubeVideo($new->video)}}/hqdefault.jpg" alt="" class="img-fluid tech-img" />
                        </div>
                        <h4 class="tech-news-title">{{$new->title}}</h4>
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- tech-news-inner End -->
</main>
@endsection