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
                        <div class="card-header text-white" id="num"><h3>{{$technews}}</h3></div>
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
                        <div class="card-header text-white" id="num"><h3>{{$club}}</h3></div>
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
                        <div class="card-header text-white" id="num"><h3>{{$ictmela}}</h3></div>
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
                        <div class="card-header text-white" id="num"><h3>{{$events}}</h3></div>
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
                        <div class="card-header text-white" id="num"><h3>{{$testimonial}}</h3></div>
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
                        <div class="card-header text-white" id="num"><h3>{{$users}}</h3></div>
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
                        <div class="card-header" id="num"><h3>{{ $countMachine }}</h3></div>
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

    

</div>
@endsection

