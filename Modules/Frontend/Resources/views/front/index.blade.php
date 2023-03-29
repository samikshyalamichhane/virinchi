@extends('frontend::layouts.front')
@section('content')
<!-- Slider Start -->
<div class="home-hero home-hero--dragging-done">
  <div class="home-hero__interaction mt-0">
    <div class="home-hero__headline page-heading">
      <span class="home-hero__headline-line home-hero__editor-1">
        {{$dashboard_site->home_title}}</span>
      </span>
    </div>
    <div class="home-hero__subtext" style="opacity: 1">
      <p>
        {!! $dashboard_site->home_short_desc !!}
      </p>
      <div class="primary-btn-wrapper">
        <a href="{{route('smartByIntellect')}}" class="btn primary-btn">Learn Now</a>
      </div>
    </div>
    <div class="home-hero__image">
      <img alt="" class="home-hero__ui loaded" onload="this.classList.add('loaded')" src="{{ Storage::url($dashboard_site->home_banner_image) }}" />
      <span class="image-text">{!! $dashboard_site->home_image_desc !!}</span>
    </div>
  </div>
</div>
<!-- Slider End -->

<main>
  <!-- Our Programs Start -->
  <section class="program pi">
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-12">
          <div class="program__info">
            <div class="program__info--wp">
              <div class="section-title">
                <h2>Explore <span>our Programs</span></h2>
              </div>
              <div class="program__info--description">
                <p>
                {!! $dashboard_site->home_program_desc !!}
                </p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-md-8 col-12">
          <div class="row">
            @foreach($courses as $course)
            <div class="col-sm-6">
              <div class="card border-0 program__card">
                <img src="{{Storage::url($course->image)}}" alt="{{$course->title}}" class="card-img img-fluid" />
                <div class="card-body nop">
                  <div class="program__card--duration">
                    <h6>{{$course->duration}}</h6>
                  </div>
                  <div class="program__card--name" data-mh="programTitle">
                    <h3>
                      {{$course->title}}
                    </h3>
                  </div>
                  <div class="program__card--action">
                    <div class="primary-btn-wrapper">
                      <a href="{{route('courseDetail',$course->slug)}}" class="btn primary-btn">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            @endforeach

            <!-- <div class="col-sm-6">
              <div class="card border-0 program__card">
                <img src="{{asset('front/assets/img/program-2.png')}}" alt="program" class="card-img img-fluid" />
                <div class="card-body nop">
                  <div class="program__card--duration">
                    <h6>2 Years Program</h6>
                  </div>
                  <div class="program__card--name" data-mh="programTitle">
                    <h3>Master of Business Administration</h3>
                  </div>
                  <div class="program__card--action">
                    <div class="primary-btn-wrapper">
                      <a href="{{route('mba')}}" class="btn primary-btn">Learn More</a>
                    </div>
                  </div>
                </div>
              </div>
            </div> -->
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Our Programs End -->

  <!-- Life at Virinchi Start -->
  <section class="life">
    <div class="container">
      <div class="section-title mb-5">
        <h2>Life <span>at Virinchi</span></h2>
      </div>

      <div class="gallery-content">
        <div class="gallery-images">
          <figure class="gallery-image gallery-image--1x1 loaded" id="image1">
            <a href="#image1">
              <div class="gallery-image__crop" tabindex="-1">
                <img class="gallery-image__media lazyloaded" alt="Preparing Home Automation For Exhibition" src="{{asset('front/assets/img/life/life-5.jpg')}}" />
              </div>
              <figcaption class="gallery-image__caption">
                Celebrating Convocation 2022
              </figcaption>
            </a>
          </figure>

          <figure class="gallery-image gallery-image--1x1 loaded" id="image2">
            <a href="#image2">
              <div class="gallery-image__crop" tabindex="-1">
                <img class="gallery-image__media lazyloaded" alt="Virinchians' together" src="{{asset('front/assets/img/life/life-2.jpg')}}" />
              </div>
              <figcaption class="gallery-image__caption">
                Virinchians' together
              </figcaption>
            </a>
          </figure>

          <figure class="gallery-image gallery-image--1x12 loaded" id="image3">
            <a href="#image3">
              <div class="gallery-image__crop" tabindex="-1">
                <img class="gallery-image__media lazyloaded" alt="View of INFINITY CUBE created during ICT Mela" src="{{asset('front/assets/img/life/life-3.jpg')}}" />
              </div>
              <figcaption class="gallery-image__caption">
                View of INFINITY CUBE created during ICT Mela
              </figcaption>
            </a>
          </figure>

          <figure class="gallery-image gallery-image--1x12 loaded" id="image4">
            <a href="#image4">
              <div class="gallery-image__crop" tabindex="-1">
                <img class="gallery-image__media lazyloaded" alt="Makers of Robo Ramp Race" src="{{asset('front/assets/img/life/life-4.jpg')}}" />
              </div>
              <figcaption class="gallery-image__caption">
                Makers of Robo Ramp Race
              </figcaption>
            </a>
          </figure>

          <figure class="gallery-image gallery-image--1x3 loaded" id="image5">
            <a href="#image5">
              <div class="gallery-image__crop" tabindex="-1">
                <img class="gallery-image__media lazyloaded" alt="Celebrating Convocation 2022" src="{{asset('front/assets/img/life/life-6.jpg')}}" />
              </div>
              <figcaption class="gallery-image__caption">
                Performers at 5th V- Celebration
              </figcaption>
            </a>
          </figure>

          <figure class="gallery-image gallery-image--1x12 loaded" id="image6">
            <a href="#image6">
              <div class="gallery-image__crop" tabindex="-1">
                <img class="gallery-image__media lazyloaded" alt="Performers at 5th V- Celebration" src="{{asset('front/assets/img/life/life-1.jpg')}}" />
              </div>
              <figcaption class="gallery-image__caption">
                Preparing Home Automation For Exhibition
              </figcaption>
            </a>
          </figure>

          <figure class="gallery-image gallery-image--1x1 loaded" id="image7">
            <a href="#image7">
              <div class="gallery-image__crop" tabindex="-1">
                <img class="gallery-image__media lazyloaded" alt="Students' happy moment at college event" src="{{asset('front/assets/img/life/life-8.jpg')}}" />
              </div>
              <figcaption class="gallery-image__caption">
                Students' happy moment at college event
              </figcaption>
            </a>
          </figure>
        </div>
      </div>
    </div>
  </section>
  <!-- Life at Virinchi End -->

  <!-- Testimonial Start -->
  <section class="testimonial" id="testimonial">
    <div class="testimonial-overlay"></div>
    <div class="container">
      <div class="testimonial__tab">
        <div class="row">
          <div class="col-12">
            <div class="row">
              <div class="col-12">
                <h2 class="testimonial__title">In their Words</h2>
              </div>
              <div class="col-12">
                <div class="list-group" id="list-tab" role="tablist">
                  <a class="list-group-item list-group-item-action active list-student" id="list-student-list" data-toggle="list" href="#list-student" role="tab" aria-controls="student">Students On Experience</a>
                  <a class="list-group-item list-group-item-action list-alumni" id="list-alumni-list" data-toggle="list" href="#list-alumni" role="tab" aria-controls="alumni">Alumni On Outcomes</a>
                  <a class="list-group-item list-group-item-action list-faculty" id="list-faculty-list" data-toggle="list" href="#list-faculty" role="tab" aria-controls="faculty">Faculty On Academics</a>
                </div>
              </div>
              <div class="col-12">
                <div class="tab-content" id="nav-tabContent">
                  <div class="tab-pane fade show active" id="list-student" role="tabpanel" aria-labelledby="list-student-list">
                    <div class="row">
                      <div class="col-md-10 col-12">
                        <div class="swiper testimonial__swiper">
                          <div class="swiper-wrapper">
                            @foreach($testimonials->where('testimonialcategory_id',1) as $testimonial)
                            <div class="swiper-slide">
                              <div class="testimonial__swiper--card">
                                <p>
                                  {{$testimonial->description}}
                                </p>
                                <div class="media">
                                  <img src="{{Storage::url($testimonial->image)}}" class="mr-3" alt="..." />
                                  <div class="media-body">
                                    <h5>{{$testimonial->name}}</h5>
                                    <p>{{$testimonial->batch}}</p>
                                    <!--<span>Jan 2020 Intake</span>-->
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
                          <div class="swiper-button-prev"></div>
                          <div class="swiper-button-next"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="list-alumni" role="tabpanel" aria-labelledby="list-alumni-list">
                    <div class="row">
                      <div class="col-md-10 col-12">
                        <div class="swiper testimonial__swiper">
                          <div class="swiper-wrapper">
                            @foreach($testimonials->where('testimonialcategory_id',2) as $testimonial)
                            <div class="swiper-slide">
                              <div class="testimonial__swiper--card">
                                <p>
                                  {{$testimonial->description}}
                                </p>
                                <div class="media">
                                  <img src="{{Storage::url($testimonial->image)}}" class="mr-3" alt="..." />
                                  <div class="media-body">
                                    <h5>{{$testimonial->name}}</h5>
                                    <p>{{$testimonial->batch}}</p>
                                    <span>{{$testimonial->intake}}</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
                          <div class="swiper-button-prev"></div>
                          <div class="swiper-button-next"></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="tab-pane fade" id="list-faculty" role="tabpanel" aria-labelledby="list-faculty-list">
                    <div class="row">
                      <div class="col-md-10 col-12">
                        <div class="swiper testimonial__swiper">
                          <div class="swiper-wrapper">
                            @foreach($testimonials->where('testimonialcategory_id',3) as $testimonial)
                            <div class="swiper-slide">
                              <div class="testimonial__swiper--card">
                                <p>
                                  {{$testimonial->description}}
                                </p>
                                <div class="media">
                                  <img src="{{Storage::url($testimonial->image)}}" class="mr-3" alt="..." />
                                  <div class="media-body">
                                    <h5>{{$testimonial->name}}</h5>
                                    <p>{{$testimonial->batch}}</p>
                                    <span>{{$testimonial->intake}}</span>
                                  </div>
                                </div>
                              </div>
                            </div>
                            @endforeach
                          </div>
                          <div class="swiper-button-prev"></div>
                          <div class="swiper-button-next"></div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Testimonial End -->

  <!-- Tech News & Event Start -->
  <section class="tech-event">
    <div class="tech">
      <div class="container">
        <div class="">
          <div class="section-title tttt">
            <h2>
              <a href="{{route('techNews')}}">Tech News from <span>Virinchians</span></a>
            </h2>
            <a href="tech-news-listing.php"></a>
          </div>
        </div>

        <div class="row newvideos">
          <div class="col-md-10 col-12">
            <div class="row">
              @foreach($news as $new)
              <div class="col-md-4 col-sm-6 mb-3 pr-1">
                <a href="{{route('techNewsDetail',$new->slug)}}">
                  <!--<div class="tech-news-card">-->
                  <div class="university-wrapper image-margin nu">
                    <a href="{{route('techNewsDetail',$new->slug)}}" class="play">
                      <a href="{{route('techNewsDetail',$new->slug)}}"><img class="vh" src="https://img.youtube.com/vi/{{$new->youtubeVideo($new->video)}}/0.jpg" alt="" class="img-fluid" /></a>
                      <a href="{{route('techNewsDetail',$new->slug)}}" class="play">
                        <img src="{{asset('front/assets/img/video-play.png')}}" alt="" class="img-fluid">
                      </a>
                    </a>
                    <!--<img src="https://img.youtube.com/vi/rRZfY6s9gkM/hqdefault.jpg" alt="" class="img-fluid tech-img" />-->
                  </div>
                </a>
              </div>
              @endforeach
              {{--<div class="col-md-4 col-sm-6 mb-3 pr-1">
                <a href="{{route('techNewsDetail',[2])}}">
                  <div class="university-wrapper image-margin nu">
                    <a href="{{route('techNewsDetail',[2])}}"><img class="vh" src="{{asset('front/assets/img/th3.jpg')}}" alt="" class="img-fluid" /></a>
                    <a href="{{route('techNewsDetail',[2])}}" class="play">
                      <img src="{{asset('front/assets/img/video-play.png')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </a>
              </div>
              <div class="col-md-4 col-sm-6 mb-3 pr-1">
                <a href="{{route('techNewsDetail',[3])}}">
                  <div class="university-wrapper image-margin nu">
                    <a href="{{route('techNewsDetail',[3])}}"><img class="vh" src="{{asset('front/assets/img/th-3.jpg')}}" alt="" class="img-fluid" /></a>
                    <a href="{{route('techNewsDetail',[3])}}" class="play">
                      <img src="{{asset('front/assets/img/video-play.png')}}" alt="" class="img-fluid">
                    </a>
                  </div>
                </a>
              </div>--}}
            </div>
          </div>

          <!-- Video Modal -->
          <!-- <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="videoModalLabel" aria-hidden="true">
              <div class="modal-dialog modal-dialog-centered modal-lg">

                <div class="modal-content">
                  <div class="modal-header border-0">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                      <span aria-hidden="true">&times;</span>
                    </button>
                  </div>
                  <div class="modal-body p-0">
                    <iframe width="100%" height="500ox" src="https://www.youtube.com/embed/rRZfY6s9gkM" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                  </div>

                </div>
              </div>
            </div> -->
          <!-- Video Modal End -->
        </div>
      </div>
    </div>

    <div id="events" class="events">
      <div class="events-wrapper" id="events-content">
        <div class="container">
          <div class="events-carousel">
            <div class="event__info">
              <div class="section-title">
                <h2><span>Events</span></h2>
                <p>What's hapenning on Virinchi College</p>
              </div>
            </div>

            <div class="event__learn-more button-wrapper">
              <a href="{{route('eventsListing')}}">Learn More
                <img src="{{asset('front/assets/img/arrow-right-lg.svg')}}" alt="" class="img-fluid event-img" /></a>
            </div>

            <div class="owl-carousel owl-theme newevent">
              @foreach($events as $event)
              <div class="item">
                <div class="card event__card">
                  <a href="{{route('eventsListing')}}">
                    <img src="{{Storage::url($event->image)}}" alt="" class="card-img img-fluid event-img" />
                    <h6>
                      {{$event->title}}
                    </h6>
                  </a>
                  <div class="event__card--date">
                    <p>{{ \Carbon\Carbon::parse($event->from_date)->isoFormat('MMM')}}<span>{{ \Carbon\Carbon::parse($event->from_date)->isoFormat('D')}}</span></p>
                  </div>
                </div>
              </div>
              @endforeach

              {{--<div class="item">
                <div class="card event__card">
                  <a href="{{route('eventsListing')}}">
                    <img src="{{asset('front/assets/img/news-3.jpg')}}" alt="" class="card-img img-fluid event-img" />
                    <h6>
                      Project proposal writing workshop
                    </h6>
                  </a>
                  <div class="event__card--date">
                    <p>NOV<span>01</span></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="card event__card">
                  <a href="{{route('eventsListing')}}">
                    <img src="{{asset('front/assets/img/news-2.jpg')}}" alt="" class="card-img img-fluid event-img" />
                    <h6>
                      7-day Sports Week Held -4th July to 10 July 2022
                    </h6>
                  </a>
                  <div class="event__card--date">
                    <p>Jul<span>04</span></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="card event__card">
                  <a href="{{route('eventsListing')}}">
                    <img src="{{asset('front/assets/img/news-2.jpg')}}" alt="" class="card-img img-fluid event-img" />
                    <h6>
                      7-day Sports Week Held -4th July to 10 July 2022
                    </h6>
                  </a>
                  <div class="event__card--date">
                    <p>Jul<span>01</span></p>
                  </div>
                </div>
              </div>

              <div class="item">
                <div class="card event__card">
                  <a href="{{route('eventsListing')}}">
                    <img src="{{asset('front/assets/img/news-1.jpg')}}" alt="" class="card-img img-fluid event-img" />
                    <h6>
                      A practical guide to git and github
                    </h6>
                  </a>
                  <div class="event__card--date">
                    <p>Jun<span>28</span></p>
                  </div>
                </div>
              </div>--}}

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Tech News & Event End -->

  <!-- The University Start -->
  <section class="university">
    <div class="container">
      <div class="card border-0 university__card">
        <div class="row">

          <div class="col-lg-6 col-md-8">
            <div class="university__info">
              <div class="university__info--wp">
                <div class="section-title newspace">
                  <div class="section-title">
                    <h2>The <span>University</span></h2>
                  </div>
                  <p>
                    {!! $dashboard_site->uni_desc !!}
                  </p>
                </div>
                <br />
                <div class="primary-btn-wrapper">
                  <a href="{{route('affiliation')}}" class="btn primary-btn">Learn More</a>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6 col-md-4">
            <div class="university-wrapper image-margin uniplay">
              <img src="{{ Storage::url($dashboard_site->uni_image) }}" alt="" class="img-fluid card-img" />

              <a href="{{$dashboard_site->uni_video_link}}" class="play upp" target="_blank">
                <img src="{{asset('front/assets/img/video-play.png')}}" alt="" class="img-fluid" />
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- The University End -->

  <!-- Quick Action Start -->
  <section class="quick-action">
    <div class="container">
      <div class="row">
        <div class="col-12 mx-auto">
          <div class="quick-action__wrapper lessmargin">
            <div>
              <div class="section-title">
                <h2>Ready for <span>what’s next</span></h2>
              </div>

              <div class="quick-action__buttons">
                <div class="primary-btn-wrapper">
                  <a href="{{route('requestInfo')}}" class="btn primary-btn">Request Info</a>
                </div>
                <div class="primary-btn-wrapper">
                  <a href="{{route('howToApply')}}" class="btn primary-btn">Apply Now</a>
                </div>
                <div class="primary-btn-wrapper">
                  <a href="{{route('visitUs')}}" class="btn primary-btn">Visit Us</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div class="quick-action__bg">

    </div>
  </section>
  <!-- Quick Action End -->
</main>

@endsection
@push('script')
<script>
  $(function() {
    $(".gallery-image").click(function() {
      $(this)
        .toggleClass("gallery-image--preview")
        .siblings()
        .removeClass("gallery-image--preview");
    });
  });

  $(document).ready(function() {
    $(".list-student").click(function() {
      $("#testimonial").css({
        "background-image": "url({{asset('front/assets/img/testimonial-bg3.jpg')}})",
      });
      $("#testimonial .testimonial-overlay").css({
        "display": "block",

      });
    });
    $(".list-alumni").click(function() {
      $("#testimonial").css({
        "background-image": "url({{asset('front/assets/img/a.jpg')}})",
        "background-color": "gray",
      });
      $("#testimonial .testimonial-overlay").css({
        "display": "none",

      });
    });
    $(".list-faculty").click(function() {
      $("#testimonial").css({
        "background-image": "url({{asset('front/assets/img/testimonial-bg2.jpg')}})",
      });
      $("#testimonial .testimonial-overlay").css({
        "display": "block",

      });
    });
  });
</script>
@endpush