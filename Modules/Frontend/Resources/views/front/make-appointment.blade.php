@extends('frontend::layouts.front')
@section('content')
 <!-- Banner Start -->
    <div class="banner makeappointment noh">
        <div class="container">
            <div class="banner-wrapper">
                <h2>Make an appointment</h2>
            </div>
        </div>
    </div>
    <!-- Banner End -->
<nav aria-label="breadcrumb">
 <ol class="breadcrumb">
 <!--<li class="breadcrumb-item"><a href="#">Home</a></li>-->
<li class="breadcrumb-item"><a href="#">Request Information</a></li>
 <li class="breadcrumb-item active" aria-current="page">Make an appointment</li>
</ol>
</nav>
    <main>
        <!-- Appointment Form Start -->
        <div class="appointment-form">
            <div class="container nvc">
            @if(Session::has('message'))
            <div class="alert alert-success alert-dismissible message">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                {!! Session::get('message') !!}
            </div>
            @endif
                @if (count($errors) > 0)
                <div class="alert alert-danger message">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                    <ul>
                        @foreach($errors->all() as $error)
                        <li>{{$error}}</li>
                        @endforeach
                    </ul>
                </div>
                @endif
            <div class="container">
                <div class="col-md-12 afb">
                    <p>Required fields are marked with asterisk(*)</p>
                    <form action="{{route('saveAppointment')}}" method="POST">
                        {{csrf_field()}}

                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label for="name" class="bold-label">Full Name<strong>*</strong></label>
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="phone" class="bold-label">Email<strong>*</strong></label>
                                <input type="email" class="form-control" id="phone" name="email">
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label for="phone" class="bold-label">Contact Number<strong>*</strong></label>
                                <input type="tel" class="form-control" id="phone" name="contact_number">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="email" class="bold-label">Programm</label><br>
                                <select name="program" id="" class="form-control fm-default" >
                                    <option value="">-- Select One --</option>
                                    <option value="BICT">BICT</option>
                                    <option value="MBA">MBA</option>
                                </select>
                            </div>
                        </div>

                        <div class="row">
                            <div class="form-group col-md-6 col-12">
                                <label for="email" class="bold-label">Date<strong>*</strong></label>
                                <input type="date" max="3000-12-31" 
        min="1000-01-01" class="form-control" name="date">
                            </div>
                            <div class="form-group col-md-6 col-12">
                                <label for="email" class="bold-label">Time<strong>*</strong></label><br>
                                <select  id="" class="form-control fm-default" name="time">
                                    <option value="">-- Select One --</option>
                                    <option value="9-10">9-10</option>
                                    <option value="10-11">10-11</option>
                                    <option value="11-12">11-12</option>
                                    <option value="12-13">12-13</option>
                                    <option value="13-14">13-14</option>
                                    <option value="14-15">14-15</option>
                                    <option value="15-16">15-16</option>
                                </select>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-12 form-group che">
      <input type="checkbox" id="javascript" name="checkbox">
      <label for="javascript">*Yes, I understand that Virinchi will protect my details as per the privacy policy.</label>
    </div>
                        </div>



                        <div class="applyonline-footer button-wrapper">
                            <button class="btn primary-btn" type="submit">Submit</button>
                            <!-- <a class="btn primary-btn" href="#" type="submit">Submit</a> -->
                            
                           
                        </div>

                    </form>
                </div>
            </div>
        </div>
        </div>
      
        
      
        <!-- Contact us End -->
    </main>

@endsection 