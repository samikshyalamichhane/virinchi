@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('user.index') }}">User</a></li>
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
            <form method="post" action="{{ route('updateCustomerProfile',$user->id) }}" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Edit User</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input class="form-control" required name="name" id="name" type="text" placeholder="Enter User Name" value="{{ $user->name }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input class="form-control" required name="email" id="email" type="email" placeholder="Enter User Email" value="{{ $user->email }}">
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="phone_number">Phone Number</label>
                                    <input class="form-control" required name="phone_number" id="phone_number" type="phone_number" placeholder="Enter User phone number" value="{{ $user->phone_number }}">
                                </div>
                            </div>
                            <div class="col-sm-6">
                                <div class="form-group">
                                    <label for="image"></label>
                                    <input type="file" name="profile_image" class="form-control" onchange="preview()">
                                    <!-- <img id="frame" src="" width="100px" height="100px" /> -->
                                    <img id="frame" src="{{ Storage::url($user->profile_image) }}" width="100px"
                                                height="100px" />
                                </div>
                            </div>


                        </div>
                        <div class="form-group row">
                            <label class="col-md-1 col-form-label">Active</label>
                            <div class="col-md-9 col-form-label">
                                <div class="row">
                                    <div class="col-3 colxs-12">
                                        <div class="form-check checkbox">
                                            <input class="form-check-input" id="publish" name="publish" type="checkbox" value="true" {{ $user->publish==1?'checked':'' }}>
                                            <label class="form-check-label" for="publish">Active</label>
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
<script>
    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
@endpush