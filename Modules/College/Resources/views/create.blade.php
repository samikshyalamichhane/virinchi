@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('college.index') }}">college</a></li>
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
            <form method="post" action="{{ route('college.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add college</div>
                    <div class="card-body">
                        <div class="row">
                            <!-- <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="title">Title</label>
                                    <input name="title" class="form-control" value="{{ old('title') }}" required>
                                </div>
                            </div> -->
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="graduate_on_time">GRADUATE ON TIME</label>
                                    <input name="graduate_on_time" class="form-control" value="{{ old('graduate_on_time') }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="industry_readiness">INDUSTRY READINESS</label>
                                    <input name="industry_readiness" class="form-control" value="{{ old('industry_readiness') }}" required>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="graduate_employed">GRADUATE EMPLOYED</label>
                                    <input name="graduate_employed" class="form-control" value="{{ old('graduate_employed') }}" required>
                                </div>
                            </div>
                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="education_model_description">Education Model Description</label>
                                    <textarea name="education_model_description" class="form-control"
                                        required>{{ old('education_model_description') }}</textarea>
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
    function collegeBannerpreview() {
        framecollegeBanner.src=URL.createObjectURL(event.target.files[0]);
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
    CKEDITOR.replace('education_model_description', options);
</script>
@endpush
