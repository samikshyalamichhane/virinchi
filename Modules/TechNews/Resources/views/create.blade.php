@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('technews.index') }}">Tech News</a></li>
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
            <form method="post" action="{{ route('technews.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add TechNews</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ old('title') }}" placeholder="Enter Title" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="video">Video</label>
                                    <input name="video" type="link" class="form-control" value="{{ old('video') }}" placeholder="Enter Video Link">
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="description">Description</label>
                                    <textarea name="description" class="form-control"
                                        required>{{ old('description') }}</textarea>
                                </div>
                            </div>
                            <!-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="product_full_description">Product Full Description</label>
                                    <textarea name="product_full_description" class="form-control"
                                        required>{{ old('product_full_description') }}</textarea>
                                </div>
                            </div> -->
                            <!-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="meta_title">Meta Title</label>
                                    <input name="meta_title" class="form-control" value="{{ old('meta_title') }}" placeholder="Enter Product Meta Title">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="meta_keyword">Meta Keyword</label>
                                    <input name="meta_keyword" class="form-control" value="{{ old('meta_keyword') }}" placeholder="Enter Product Meta Keywork">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="meta_description">Meta Description</label>
                                    <input name="meta_description" class="form-control" value="{{ old('meta_description') }}" placeholder="Enter Product Meta Description">
                                </div>
                            </div> -->

                        </div>
                        <div class="form-group row">
                            <div class="col-md-12 col-form-label">
                                <div class="row">
                                    <div class="col-4 colxs-12">
                                        <label>Tech News Image</label>
                                        <div class="form-check checkbox">
                                            <input type="file" name="image" class="form-control" onchange="preview()">
                                            <img id="frame" src="" width="100px" height="100px" />
                                        </div>
                                    </div>
                                    <!-- <div class="col-4 colxs-12">
                                        <label>Product Icon</label>
                                        <div class="form-check checkbox">
                                            <input type="file" name="icon" class="form-control"
                                                onchange="previewIcon()">
                                            <img id="frameIcon" src="" width="100px" height="100px" />
                                        </div>
                                    </div> -->
                                    <div class="col-4 colxs-12">
                                        <label>Technews Inner Banner</label>
                                        <div class="form-check checkbox">
                                            <input type="file" name="technews_detail_banner" class="form-control"
                                                onchange="previewProductBanner()">
                                            <img id="frameProductBanner" src="" width="100px" height="100px" />
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Publish</label>
                            <div class="col-md-9 col-form-label">
                                <div class="row">
                                    <div class="col-3 colxs-12">
                                        <div class="form-check checkbox">
                                            <input class="form-check-input" id="publish" name="publish" type="checkbox"
                                                value="true">
                                            <label class="form-check-label" for="publish">Publish</label>
                                        </div>
                                    </div>

                                </div>
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
    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
    function previewIcon() {
        frameIcon.src=URL.createObjectURL(event.target.files[0]);
    }
    function previewProductBanner() {
        frameProductBanner.src=URL.createObjectURL(event.target.files[0]);
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
</script>
@endpush
