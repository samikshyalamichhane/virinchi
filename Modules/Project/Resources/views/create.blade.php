@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('projects.index') }}">Project</a></li>
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
            <form method="post" action="{{ route('projects.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add Project</div>
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
                                    <label for="activities">Activities</label>
                                    <textarea name="activities" class="form-control" id="activities" required>{{ old('activities') }}</textarea>
                                </div>
                            </div>

                            <div class="col-sm-12">
                                <div class="form-group">
                                    <label for="donor_partners">Donor Partners</label>
                                    <textarea name="donor_partners" class="form-control" id="donor_partners" required>{{ old('donor_partners') }}</textarea>
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="status">Status</label>
                                    <select class="form-control form-control-sm" id="status" name="status">
                                        <option value="">Select status</option>
                                        <option value="completed">Completed</option>
                                        <option value="on_going">On Going</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-sm-6  d-none" id="final_outcomes">
                                <div class="form-group">
                                    <label for="final_outcomes">Final Outcome</label>
                                    <textarea name="final_outcomes" class="form-control" id="outcome" required>{{ old('final_outcomes') }}</textarea>
                                </div>
                            </div>

                        </div>
                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Image</label>
                            <div class="col-md-6 col-form-label">
                                <div class="row">
                                    <div class="col-6 col-xs-12">
                                        <div class="form-check checkbox">
                                            <input type="file" name="image" class="form-control" onchange="preview()">
                                            <img id="frame" src="" width="100px" height="100px" />
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
</script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        extraPlugins: ['image2','colorbutton','basicstyles'],
        
    };
</script>
<script>
    CKEDITOR.replace('overview', options);
    CKEDITOR.replace('activities', options);
    CKEDITOR.replace('donor_partners', options);
    CKEDITOR.replace('outcome', options);
</script>
<script type="text/javascript">
    $(function() {
        $("#status").change(function() {
            if ($(this).val() == "completed") {
                $('#final_outcomes').removeClass('d-none');
            } else {
                $('#final_outcomes').addClass('d-none');
                $("#note").hide();
            }
        });
    });
</script>


@endpush