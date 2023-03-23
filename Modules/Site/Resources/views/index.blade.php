@extends('layouts.app')
@section('breadcrumb')
<ol class="m-0 border-0 breadcrumb">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="#">Site Info</a></li>
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
    <form method="post" action="{{ route('site.update',$site->id) }}" enctype="multipart/form-data">
        @csrf
        <div class="content">
            <div>
                <input type="checkbox" id="question1" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question1" class="question font-weight-bold">
                    SEO DETAILS:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="title">Site Title</label>
                                <input name="title" class="form-control" value="{{ $site->title }}" placeholder="Enter Site Title" required>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="description">Meta Description</label>
                                <textarea name="description" class="form-control">
                                {{ $site->description }}
                                </textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="meta_title">Meta Title</label>
                                <input type="text" name="meta_title" class="form-control" placeholder="Enter Meta Title" value="{{ $site->meta_title }}">
                            </div>
                        </div>

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="meta_keyword">Meta KeyWord</label>
                                <input type="text" name="meta_keyword" class="form-control" placeholder="Enter Meta Keyword" value="{{ $site->meta_keyword }}">
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div>
                <input type="checkbox" id="question2" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question2" class="question font-weight-bold">
                    SOCIAL MEDIA LINKS:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="facebook">Facebook</label>
                                <input type="text" name="facebook" class="form-control" placeholder="Enter Facebook Link" value="{{ $site->facebook }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="youtube">Youtube</label>
                                <input type="text" name="youtube" class="form-control" value="{{ $site->youtube }}" placeholder="Enter Youtube Link">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="twitter">Twitter</label>
                                <input type="text" name="twitter" class="form-control" value="{{ $site->twitter }}" placeholder="Enter Twitter Link">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="linkedin">LinkedIn</label>
                                <input type="text" name="linkedin" class="form-control" value="{{ $site->linkedin }}" placeholder="Enter LinkedIn Link">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <input type="checkbox" id="question3" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question3" class="question font-weight-bold">
                    ADDRESS & CONTACT INFO:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="text" name="email1" class="form-control" value="{{ $site->email1 }}" placeholder="Enter Email">
                            </div>
                        </div>
                        <!-- <div class="col-sm-6">
                            <div class="form-group">
                                <label for="email2">Alternative Email</label>
                                <input type="text" name="email2" class="form-control" value="{{ $site->email2 }}" placeholder="Enter Alternative Email">
                            </div>
                        </div> -->

                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="contact1">Contact</label>
                                <input type="text" name="contact1" class="form-control" placeholder="Enter Contact Number" value="{{ $site->contact1 }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="footer_desc">Footer Description</label>
                                <input type="text" name="footer_desc" class="form-control" placeholder="Enter Footer Description" value="{{ $site->footer_desc }}">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="address">Address</label>
                                <input type="text" name="address" class="form-control" value="{{ $site->address }}" placeholder="Enter Address">
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="map">Map</label>
                                <textarea name="map" class="form-control">{{ $site->map  }}</textarea>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

           {{-- <div>
                <input type="checkbox" id="question4" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question4" class="question font-weight-bold">
                    COUNTER:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="counter">Working Experience</label>
                                <input type="text" name="working_exp" class="form-control" value="{{ $site->working_exp }}" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="counter">projects_completed</label>
                                <input type="text" name="projects_completed" class="form-control" value="{{ $site->projects_completed }}" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="counter">Happy Clients</label>
                                <input type="text" name="happy_clients" class="form-control" value="{{ $site->happy_clients }}" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="counter">Training And Workshop</label>
                                <input type="text" name="training_and_workshop" class="form-control" value="{{ $site->training_and_workshop }}" >
                            </div>
                        </div>
                    </div>
                </div>
            </div> --}}

            <div>
                <input type="checkbox" id="question5" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question5" class="question font-weight-bold">
                    Home PageINFO:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="counter">Home Page Title</label>
                                <input type="text" name="about_us_title" class="form-control" value="{{ $site->about_us_title }}" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="counter">Why Choose Us Title</label>
                                <input type="text" name="why_choose_us_title" class="form-control" value="{{ $site->why_choose_us_title }}" >
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="about_us_desc">About Us</label>
                                <textarea name="about_us_desc" class="form-control">{{ $site->about_us_desc  }}</textarea>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="form-group">
                                <label for="why_choose_us_desc">Why Choose Us?</label>
                                <textarea name="why_choose_us_desc" class="form-control">{{ $site->why_choose_us_desc  }}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div>
                <input type="checkbox" id="question7" name="q" class="questions">
                <div class="plus">+</div>
                <label for="question7" class="question font-weight-bold">
                    LOGO & BANNER IMAGES:
                </label>
                <div class="answers">
                    <div class="row">
                        <div class="col-sm-4">
                            <label class="col-form-label">Header Logo</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="header_logo" class="form-control" onchange="headerPreview()">
                                            <img id="header_logo" src="{{ Storage::url($site->header_logo) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Footer Logo</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="footer_logo" class="form-control" onchange="footerPreview()">
                                            <img id="footer_logo" src="{{ Storage::url($site->footer_logo) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <label class="col-form-label">Fav Icon</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="fav_icon" class="form-control" onchange="favPreview()">
                                            <img id="fav_icon" src="{{ Storage::url($site->fav_icon) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="col-form-label">About Page Banner Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="about_banner_image" class="form-control" onchange="aboutbannerPreview()">
                                            <img id="about_banner_image" src="{{ Storage::url($site->about_banner_image) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="col-form-label">Smart By Intellect Banner Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="smart_image" class="form-control" onchange="smartbannerPreview()">
                                            <img id="smart_image" src="{{ Storage::url($site->smart_image) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="col-form-label">Club Banner Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="club_image" class="form-control" onchange="clubbannerPreview()">
                                            <img id="club_image" src="{{ Storage::url($site->club_image) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="col-form-label">Ict Mela Banner Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="ictmela_image" class="form-control" onchange="ictmelabannerPreview()">
                                            <img id="ictmela_image" src="{{ Storage::url($site->ictmela_image) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="col-form-label">Admission Page Banner Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="admission_image" class="form-control" onchange="abouutUsPreview()">
                                            <img id="admission_image" src="{{ Storage::url($site->admission_image) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="col-form-label">College Banner Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="college_image" class="form-control" onchange="whyChooseUsPreview()">
                                            <img id="college_image" src="{{ Storage::url($site->college_image) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="col-sm-4">
                            <label class="col-form-label">Affiliation Page Banner Image</label>
                            <div class="col-form-label">
                                <div class="row">
                                    <div class="col-12 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="affiliation_image" class="form-control" onchange="whyChooseUsPreview()">
                                            <img id="affiliation_image" src="{{ Storage::url($site->affiliation_image) }}" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
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
    function headerPreview() {
        header_logo.src = URL.createObjectURL(event.target.files[0]);
    }

    function footerPreview() {
        footer_logo.src = URL.createObjectURL(event.target.files[0]);
    }

    function favPreview() {
        fav_icon.src = URL.createObjectURL(event.target.files[0]);
    }

    function ourlogoPreview() {
        our_logo.src = URL.createObjectURL(event.target.files[0]);
    }

    function pagebannerPreview() {
        page_banner_image.src = URL.createObjectURL(event.target.files[0]);
    }

    function abouutUsPreview() {
        about_us_image.src = URL.createObjectURL(event.target.files[0]);
    }

    function whyChooseUsPreview() {
        why_choose_us_image.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
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
    CKEDITOR.replace('description', options);
    CKEDITOR.replace('resources', options);
</script>
@endpush
