@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a >Images</a></li>
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
            @if(Session::has('success'))
            @include('success.success',['success'=>Session::get('success')])
            @endif
            <form method="post" action="{{ route('images.store') }}" enctype="multipart/form-data">
                @csrf
                <div class="card">
                    <div class="card-header"><i class="fa fa-align-justify"></i> Add Image</div>
                    <div class="card-body">
                        <div class="form-group row">
                            <label class="col-md-4 col-form-label">Select Multiple Image</label>
                            <div class="col-md-6 col-form-label">
                                <div class="row">
                                    <div class="col-6 colxs-12">
                                        <div class="form-check checkbox">
                                            <input type='hidden' name='id' value="{{$id}}">
                                            <input type="file" name="image[]" multiple id="upload_file">
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

            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i>Multiple Images</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>S.N.</th>
                                <th>Image</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody >
                            @forelse ($images as $key=>$image)
                            <tr data-id="{{$image->id}}">
                                <td>{{$key+1}}</td>
                                <td>
                                    <img src="{{Storage::url('images/gallery/'.$image->image)}}" height="100">
                                </td>

                                <td>{!! $image->publish?'<span
                                        class="badge badge-pill badge-success">Active</span>':'<span
                                        class="badge badge-pill badge-warning">Inactive</span>' !!}</td>
                                <td>
                                    <button class="btn btn-sm btn-success addAltTag" data-id="{{$image->id}}" data-img="{{$image->img_desc}}">Edit Image Description</button>

                                     <a class="btn btn-sm btn-danger" href="{{route('images.delete',$image->id)}}">Delete</a>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Data Not Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>
                    {{-- {{ $images->links('pagination::bootstrap-4') }} --}}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Alt Tag in Image</h4>
            </div>
            <div class="modal-body">
                <form action="{{route('updateImageDesc')}}" method="post">
                    {{csrf_field()}}
                    <input type="hidden" name="product_id" id="title" value="" />
                    <!-- <div class="form-group">
                        <label>Add Image Alt Tag</label>
                        <input type="text" name="img_alt" class="form-control">
                    </div> -->

                    <div class="form-group">
                        <label>Add Image Description</label>
                        <input type="text" id="img_d" name="img_desc" value="" class="form-control">
                    </div>


                    <div class="form-group">
                        <input type="submit" name="submit" value="submit" class="btn btn-success mt-3">
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
        </div>

    </div>
</div>
@endsection
@push('page_scripts')
<script>
    function preview() {
        frame.src=URL.createObjectURL(event.target.files[0]);
    }
    function preview1() {
        frame1.src=URL.createObjectURL(event.target.files[0]);
    }
</script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function() {
        $('.addAltTag').click(function(e) {
            e.preventDefault();
            id = $(this).data('id');
            data = $(this).data('img');
            console.log(id)
            $('#myModal').modal('show');
            $("#myModal #title").val(id);
            $("#myModal #img_d").val(data);
            $("#myModal #product_name").val(title);
        });

    });
</script>
@endpush
