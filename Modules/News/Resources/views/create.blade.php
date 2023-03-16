@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('events.index') }}">Events</a></li>
    {{-- <li class="breadcrumb-item active">Dashboard</li> --}}
</ol>
@endsection
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            @include('errors.validation-error')
            @if(Session::has('error'))
            @include('errors.catch-error',['catch_error'=>Session::get('error')])
            @endif
            <form method="post" action="{{ route('events.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add Event</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ old('title') }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date">From Date</label>
                                    <input name="from_date" type="date" class="form-control" value="{{ old('from_date') }}" >
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="date">To Date</label>
                                    <input name="to_date" type="date" class="form-control" value="{{ old('to_date') }}" >
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control"
                                        required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Image</label>
                            <div class="col-md-9 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="image" class="form-control" onchange="preview()">
                                            <img id="frame" src="" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Banner Image</label>
                            <div class="col-md-9 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="banner_image" class="form-control" onchange="bannerPreview()">
                                            <img id="banner_frame" src="" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="publish">Publish</label>
                                    <br>
                                    <input id="publish" name="publish" type="checkbox" value="true">

                                </div>
                            </div>

                    </div>
                    <div class="card-footer">
                        <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
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
    CKEDITOR.replace('description', options);
</script>

<script>
    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
    function bannerPreview() {
        banner_frame.src=URL.createObjectURL(event.target.files[0]);
    }
</script>

@endpush
