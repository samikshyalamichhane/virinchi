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
                {{--@php
                $countBlog = \Modules\Blog\Entities\Blog::latest()->count();
                @endphp
                <div class="col-sm-3">
                    <div id="card" class="card border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="num"><h3>{{ $countBlog }}</h3></div>
                        <div class="card-body text-primary">
                        <h3 class="card-title" id="title">Blogs</h3>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a id="link" href="{{route('blog.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        <p class="card-text"></p>
                        </div>
                    </div>
                </div>--}}

               {{-- @php
                $countProject = \Modules\Project\Entities\Project::latest()->count();
                @endphp
                <div class="col-sm-3">
                    <div id="card" class="card border-primary  mb-3" style="max-width: 18rem;">
                        <div class="card-header" id="num"><h3>{{ $countProject }}</h3></div>
                        <div class="card-body text-primary">
                        <h3 class="card-title" id="title">Projects</h3>
                        <div class="icon">
                            <i class="ion ion-pie-graph"></i>
                        </div>
                        <a id="link" href="{{route('projects.index')}}" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
                        <p class="card-text"></p>
                        </div>
                    </div>
                </div>

                @php
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

    {{--@php
    $contactus = \Modules\Contactus\Entities\Contactus::where('type', 'Contact')->orderBy('created_at', 'DESC')->limit(8)->get();
    // dd($contactus);
    @endphp
    <div class="card">
        <div class="card-header"><i class="fa fa-align-justify"></i><a href="{{ route('contactus.index') }}"> <strong>View All Contacts</strong></a></div>
        <div class="card-body">
            <table class="table table-responsive-sm table-bordered table-striped table-sm">
                <thead>
                    <tr>
                        <th>S.N</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Subject</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($contactus as $key=>$contact)
                    <tr>
                        <td>{{ $key+1 }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ Str::limit($contact->subject, 50) }}</td>
                        
                    </tr>
                    @empty
                    <tr>
                        <td colspan="6">Data Not Found</td>
                    </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>--}}

</div>
@endsection

