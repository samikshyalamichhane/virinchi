@extends('frontend::layouts.master')
@section('title','Our Products')
@section('content')
@php
$site = \Modules\Site\Entities\Site::latest()->first();
@endphp
{{-- {{ asset('frontend/ ') }} --}}

<!--Main Part Starts-->
<section class="inner-wrap">
    @if (isset($dashboard_site->product_banner))
    <img src="{{ Storage::url($dashboard_site->product_banner) }}" alt="">
    @else
    <img src="{{ asset('frontend/images/bannerr.png') }}" alt="">
    @endif
    <div class="inner-text animate__animated animate__fadeInLeft wow">
        {{-- <h3>OUR PRODUCTS</h3> --}}
        <p>In Nepal</p>
        <h3>Our Products</h3>
    </div>
</section>
<section class="common-space producttab">
    <div class="container">
        <div class="row">

            <nav>
                <div class="nav nav-tabs nav-fill" id="nav-tab" role="tablist">
                    <a class="nav-item nav-link active" id="nav-home-tab" data-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">All</a>
                    @foreach ($productCategories as $category)
                    <a class="nav-item nav-link" id="nav-profile-tab" data-toggle="tab" href="#{{ $category->slug }}" role="tab" aria-controls="nav-profile" aria-selected="false">{{ $category->category_name }}</a>
                    @endforeach
                </div>
            </nav>
            <div class="tab-content py-3 px-3 px-sm-0 prtab newprodcuttab" id="nav-tabContent">

                <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
                    <div class="row mb-5 mt-5">
                        @foreach ($products as $product)
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-7">
                                    <a href="#"><img src="{{ Storage::url($product->image) }}" alt=""></a>
                                </div>
                                <div class="col-md-5">
                                    <h6><a href="#">{{ @$product->title }}</a></h6>
                                    <p>{!! $product->description !!}</p>
                                    <!--<a href="#">Read more</a>-->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @foreach ($productCategories as $category)
                <div class="tab-pane fade" id="{{ $category->slug }}" role="tabpanel" aria-labelledby="nav-profile-tab">
                    <div class="row mb-5 mt-5">
                        @foreach ($category->products as $product)

                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-7">
                                    <a href="#"><img src="{{ Storage::url($product->image) }}" alt=""></a>
                                </div>
                                <div class="col-md-5">
                                    <h6><a href="#">{{ @$product->title }}</a></h6>
                                    <p>{!! $product->description !!}</p>
                                    <!--<a href="#">Read more</a>-->
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<section class="bg-image">
    <img src="{{ asset('frontend/images/bg-img.png') }}" alt="">
</section>
<!--Main Part Ends-->

@endsection