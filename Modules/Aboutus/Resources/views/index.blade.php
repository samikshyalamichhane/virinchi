@extends('layouts.app')
@section('breadcrumb')
<ol class="m-0 border-0 breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="#">About US Info</a></li>
    {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
</ol>
@endsection
<style>
    .content {
        width: 100%;
        padding: 0;
        margin: 0 auto;
    }

    .question {
        position: relative;
        background: #fff;
        margin: 0;
        padding: 10px 10px 10px 50px;
        display: block;
        width: 100%;
        cursor: pointer;
    }

    .answers {
        padding: 0px 15px;
        margin: 5px 0;
        width: 100% !important;
        height: 0;
        overflow: hidden;
        /* z-index: -1; */
        position: relative;
        opacity: 0;
        -webkit-transition: .3s ease;
        -moz-transition: .3s ease;
        -o-transition: .3s ease;
        transition: .3s ease;
    }

    .questions:checked~.answers {
        height: auto;
        opacity: 1;
        background: #fff;
        padding: 15px;
    }

    .plus {
        position: absolute;
        margin-left: 10px;
        z-index: 5;
        font-size: 2em;
        line-height: 100%;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        -o-user-select: none;
        user-select: none;
        -webkit-transition: .3s ease;
        -moz-transition: .3s ease;
        -o-transition: .3s ease;
        transition: .3s ease;

    }

    .questions:checked~.plus {
        -webkit-transform: rotate(45deg);
        -moz-transform: rotate(45deg);
        -o-transform: rotate(45deg);
        transform: rotate(45deg);
    }

    .questions {
        display: none;
    }
</style>
@section('content')

<div class="container-fluid">
    @include('errors.validation-error')
    @if(Session::has('error'))
    @include('errors.catch-error',['catch_error'=>Session::get('error')])
    @endif
    <form method="post" action="{{ route('aboutus.update',$aboutus->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div>
                <input type="checkbox" id="question1" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question1" class="question font-weight-bold">
                    ABOUT US:
                </label>
                <div class="answers">
                    <div class="row">

                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="about_us_description">About Us Description </label>
                                <textarea name="about_us_description" class="form-control">{{ $aboutus->about_us_description  }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <input type="checkbox" id="question3" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question3" class="question font-weight-bold">
                    MISSION AND VISION:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="mission_description">Mission Description </label>
                                <textarea name="mission_description" class="form-control">{{ $aboutus->mission_description  }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="form-group">
                                <label for="vision_description">Vision Description </label>
                                <textarea name="vision_description" class="form-control">{{ $aboutus->vision_description  }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
        <div>
            <button class="btn btn-primary" type="submit">Submit</button>
        </div>
    </form>
</div>
@endsection
@push('page_scripts')
<script src="https://cdn.ckeditor.com/4.18.0/standard-all/ckeditor.js"></script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        extraPlugins: 'image2',
        
    };
</script>
<script>
    CKEDITOR.replace('mission_description', options);
    CKEDITOR.replace('vision_description', options);
    CKEDITOR.replace('about_us_description', options);
</script>
@endpush