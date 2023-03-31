@extends('layouts.app')

@section('content')
<div class="container-fluid">
    @if(Session::has('error'))
    @include('errors.catch-error',['catch_error'=>Session::get('error')])
    @endif
    @if(Session::has('success'))
    @include('success.success',['success'=>Session::get('success')])
    @endif
    <div class="row">
        <div class="col-sm-12">
            <div class="row">
                <div class="col-sm-3">
                    <div id="card" class="card bg-danger border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header text-white" id="num">
                            <h3>{{$technews}}</h3>
                        </div>
                        <div class="card-body text-white">
                            <h3 class="card-title" id="title">Tech News</h3>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a id="link" href="{{route('technews.index')}}" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div id="card" class="card bg-primary border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header text-white" id="num">
                            <h3>{{$club}}</h3>
                        </div>
                        <div class="card-body text-white">
                            <h3 class="card-title" id="title">Clubs</h3>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a id="link" href="{{route('club.index')}}" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div id="card" class="card bg-success border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header text-white" id="num">
                            <h3>{{$ictmela}}</h3>
                        </div>
                        <div class="card-body text-white">
                            <h3 class="card-title" id="title">IctMela</h3>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a id="link" href="{{route('ictmela.index')}}" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div id="card" class="card bg-info border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header text-white" id="num">
                            <h3>{{$events}}</h3>
                        </div>
                        <div class="card-body text-white">
                            <h3 class="card-title" id="title">Events</h3>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a id="link" href="{{route('events.index')}}" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div id="card" class="card bg-warning border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header text-white" id="num">
                            <h3>{{$testimonial}}</h3>
                        </div>
                        <div class="card-body text-white">
                            <h3 class="card-title" id="title">Testimonial</h3>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a id="link" href="{{route('events.index')}}" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>

                <div class="col-sm-3">
                    <div id="card" class="card bg-dark border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header text-white" id="num">
                            <h3>{{$users}}</h3>
                        </div>
                        <div class="card-body text-white">
                            <h3 class="card-title" id="title">Users</h3>
                            <div class="icon">
                                <i class="ion ion-pie-graph"></i>
                            </div>
                            <a id="link" href="{{route('events.index')}}" class="small-box-footer text-white">More info <i class="fa fa-arrow-circle-right"></i></a>
                            <p class="card-text"></p>
                        </div>
                    </div>
                </div>

                {{-- @php
                $countMachine = \Modules\Machine\Entities\Machine::latest()->count();
                @endphp
                <div class="col-sm-3">
                    <div id="card" class="card border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="num"><h3>{{ $countMachine }}</h3>
            </div>
            <div class="card-body text-primary">
                <h3 class="card-title" id="title">Machines</h3>
                <div class="icon">
                    <i class="ion ion-pie-graph"></i>
                </div>
                <a id="link" href="{{route('machines.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                <p class="card-text"></p>
            </div>
        </div>
    </div> --}}


</div>
</div>
</div>

<div class="card">
    <div class="row">
        <div class="col-6">
            <div class="card-header"><i class="fa fa-align-justify"></i><a href="{{ route('requestInfoLists') }}"> <strong>Information Requested Lists</strong></a></div>
            <div class="card-body">
                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>view</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($requestInfos as $key=>$info)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $info->name }}</td>
                            <td>{{ $info->email }}</td>
                            <td><a href=""  class="btn btn-success btn-sm view" data-id="{{$info->id}}"><i class="fa fa-eye"></i></a></td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">Data Not Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-6">
            <div class="card-header"><i class="fa fa-align-justify"></i><a href="{{ route('appointmentLists') }}"> <strong>College Visiting List</strong></a></div>
            <div class="card-body">
                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>View</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($appointments as $key=>$appointment)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $appointment->name }}</td>
                            <td>{{ $appointment->email }}</td>
                            <td><a href=""  class="btn btn-success btn-sm viewApp" data-id="{{$appointment->id}}"><i class="fa fa-eye"></i></a></td>

                        </tr>
                        @empty
                        <tr>
                            <td colspan="6">Data Not Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i><a href="{{ route('enrollment.index') }}"> <strong>Enrollment Lists</strong></a></div>
        <div class="card-body">
            <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>View</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($enrollments as $key=>$enrollment)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $enrollment->name }}</td>
                        <td>{{ $enrollment->email }}</td>
                        <td><a href=""  class="btn btn-success btn-sm viewEnrollment" data-id="{{$enrollment->id}}"><i class="fa fa-eye"></i></a></td>
                        
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">Data Not Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

</div>



</div>
<!-- Modal -->
<div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel1" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel1">Information Requested Details</h5>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel2">College Visit Details</h5>
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

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Enrollment Details</h5>
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
                url:"{{route('viewRequestInfo')}}",
                data:{id:id},
                success:function(data){
                    console.log("Hello world");
                    console.log(data);
                    $('#exampleModal1 .modal-body').html(data);
                    $('#exampleModal1').modal('show');
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(".viewApp").click(function(e) {
            e.preventDefault();
            id=$(this).data('id');
            $.ajax({
                method:"post",
                url:"{{route('viewAppointment')}}",
                data:{id:id},
                success:function(data){
                    console.log("Hello world");
                    console.log(data);
                    $('#exampleModal2 .modal-body').html(data);
                    $('#exampleModal2').modal('show');
                }
            });
        });
    });
</script>
<script>
    $(document).ready(function(){
        $(".viewEnrollment").click(function(e) {
            e.preventDefault();
            id=$(this).data('id');
            $.ajax({
                method:"post",
                url:"{{route('viewEnrollment')}}",
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