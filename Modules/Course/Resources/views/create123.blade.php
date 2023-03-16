@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">course</a></li>
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
            <form method="post" action="{{ route('courses.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add course</div>
                    
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-8">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ old('title') }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="overview">Overview</label>
                                    <textarea name="overview" class="form-control" required>{{ old('overview') }}</textarea>
                                </div>
                            </div>


                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="scope">Scope</label>
                                    <textarea name="scope" class="form-control" id="scope" required>{{ old('scope') }}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="eligibility">Eligibility</label>
                                    <textarea name="eligibility" class="form-control" id="eligibility" required>{{ old('eligibility') }}</textarea>
                                </div>
                            </div>
                            
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="publish">Image</label>
                                    <input type="file" name="image" class="form-control" onchange="preview()">
                                            <img id="frame" src="" width="100px" height="100px" />

                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="publish">Scope Image</label>
                                    <input type="file" name="scope_image" class="form-control" onchange="scopeImagePreview()">
                                            <img id="frame1" src="" width="100px" height="100px" />

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
        frame.src = URL.createObjectURL(event.target.files[0]);
    }
    function scopeImagePreview() {
        frame1.src = URL.createObjectURL(event.target.files[0]);
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
    CKEDITOR.replace('overview', options);
    CKEDITOR.replace('scope', options);
    CKEDITOR.replace('eligibility', options);
    CKEDITOR.replace('outcome', options);
</script>
@endpush