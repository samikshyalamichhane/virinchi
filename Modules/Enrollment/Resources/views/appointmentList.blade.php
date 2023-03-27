@extends('layouts.app')

@section('breadcrumb')
@endsection
@section('content')
<div class="container-fluid">
    <div class="fade-in">
        <div class="col-lg-12">
            @if(Session::has('error'))
            @include('errors.catch-error',['catch_error'=>Session::get('error')])
            @endif
            @if(Session::has('success'))
            @include('success.success',['success'=>Session::get('success')])
            @endif
            <div>

            </div>
            <div class="card">
                <div class="card-header"><i class="fa fa-align-justify"></i> Appointment List</div>
                <div class="card-body">
                    <table class="table table-responsive-sm table-bordered table-striped table-sm">
                        <thead>
                            <tr>
                                <th>S.N</th>
                                <th>Name</th>
                                <th>Email</th>
                                <th>Phone</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @forelse ($appointments as $key=>$contactus)
                            <tr>
                                <td>{{ $key+1 }}</td>
                                <td>{{ $contactus->name }}</td>
                                <td>{{ $contactus->email }}</td>
                                <td>{{ $contactus->contact_number }}</td>
                                


                                {{-- <!-- <td>{!! $blog->publish?'<span
                                        class="badge badge-pill badge-success">Active</span>':'<span
                                        class="badge badge-pill badge-warning">Inactive</span>' !!}</td> --> --}}
                                <td>
                                    <a href=""  class="btn btn-success btn-sm view" data-id="{{$contactus->id}}"><i class="fa fa-eye"></i></a>
                                    <button data-question="Are you sure to delete the data?" data-toggle="confirm" data-id="{{ $contactus->id }}" class="btn btn-sm btn-danger">Delete</button>
                                </td>
                            </tr>
                            @empty
                            <tr>
                                <td colspan="3">Data Not Found</td>
                            </tr>
                            @endforelse
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Appointment Details</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">X</button>
      </div>
      <div class="modal-body">
        ...
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
@endsection
@push('page_scripts')
<style>
    .team-heading {
        color: blue;
        font-size: 14px;
    }

    .details {

        padding-top: 10px;
        padding-bottom: 10px;
        font-size: 20px;
    }

    .edit {
        color: blue;
    }

    .edit:hover {
        border-radius: 50px;
        background-color: whitesmoke;
    }

    .delete {
        color: red;
    }

    .delete:hover {
        border-radius: 50px;
        background-color: whitesmoke;
    }
</style>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jscroll/2.4.1/jquery.jscroll.min.js"></script>
<script>
    $(function(){
        $('[data-toggle="confirm"]').jConfirm().on('confirm', function(e){
            var btn = $(this),
            id = btn.data('id');
            var url = '{{ route("appointment.delete", ":id") }}';
            url = url.replace(':id', id);
            window.location=url
        });
    });

    $('ul.pagination').hide();
    $(function() {
        $('.card').jscroll({
            loadingHtml: `<center><img src="https://i.pinimg.com/originals/ec/d6/bc/ecd6bc09da634e4e2efa16b571618a22.gif" width="150px" height="120px"></center>`,
            autoTrigger: true,
            padding: 0,
            nextSelector: '.pagination li.active + li a',
            contentSelector: 'div.card-body',
            callback: function() {
                $('ul.pagination').remove();
                $('[data-toggle="confirm"]').jConfirm().on('confirm', function(e){
                var btn = $(this),
                id = btn.data('id');
                var url = '{{ route("appointment.delete", ":id") }}';
                url = url.replace(':id', id);
                window.location=url
                });
            }
        });
    });

</script>

<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function(){
        $(".view").click(function(e) {
            e.preventDefault();
            id=$(this).data('id');
            $.ajax({
                method:"post",
                url:"{{route('viewAppointment')}}",
                data:{id:id},
                success:function(data){
                    console.log("Hello world");
                    console.log(data);
                    $('#exampleModal .modal-body').html(data);
                    $('#exampleModal').modal('show');
                }
            });
        });
    });
</script>


@endpush
