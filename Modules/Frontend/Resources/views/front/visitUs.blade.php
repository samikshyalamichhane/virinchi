@extends('frontend::layouts.front')
@section('content')
<div class="banner">
   <div class="container">
      <div class="banner-wrapper">
         <h2>{{$detail->title}}</h2>
      </div>
   </div>
</div>
<!-- Banner End -->
<main>
   <!-- Our visit Start -->
   <div class="visit mt-5">
      <div class="container">
         <div class="overview-content">
            <h3 class="course-title">College <span>Visit</span></h3>
            <p>
               {!! $detail->description !!}
            </p>
            
         </div>
      </div>
   </div>
   <!-- Our visit End -->
   <div class="appointment">
      <div class="container">
         <div class="row">
            <div class="col-md-6 col-12">
               <div class="appointment-content">
                  <h3 class="course-title">Make an <span>Appointment</span></h3>
                  <p>
                     {!! $dashboard_site->appointment_desc !!}
                  </p>
               </div>
            </div>
            <div class="col-md-6">
               <div class="select-date">
                  <div class="w-100">
                     <h4 class="select-date-title">Please select date:</h4>
                     <iframe src="https://calendar.google.com/calendar/embed?src=c_9b5c1822c68b9e3d1f5d8b5c6abf159f5bde4fa6e54ca735867d88e67577de6e%40group.calendar.google.com&ctz=Asia%2FKathmandu" style="border: 0" width="100%" height="300" frameborder="0" scrolling="no"></iframe>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Our visit Start -->
   <div class="visit">
      <div class="container">
         <div class="overview-content">
            <h3 class="course-title">College Visit <span> Schedule</span></h3>
            <p>
            {!! $dashboard_site->visit_schedule !!}
            </p>
         </div>
      </div>
   </div>
   <!-- Our visit End -->
   <!-- Contact us Start -->
   <div class="full_width_callouts">
      <div class="contact_block">
         <div class="contact_block_inner">
            <div class="container">
               <div class="contact_block_wrapper">
                  <div class="contact_wrapper">
                     <div class="contact_header">
                        <div class="contact_types">
                           <span class="contact_heading_label">OFFICE OF ADMISSIONS</span>
                           {!! $dashboard_site->off_admission_desc !!}
                           <!-- <h2 class="contact_name" itemprop="name">
                              <span class="contact_name_label">Meet the admission COUNSELOR</span>
                           </h2>
                           <p class="contact_info">
                              We are looking forward to meeting you! Our admissions counselors are here to answer your questions
                              and guide you through each step of the admissions process. You also can reach the Admissions Office by
                              calling
                           </p> -->
                        </div>
                        <div class="contact_types_header bottom-aligner" style="margin-top:136px;"">
                           <a class="contact_type contact_type_link contact_type_email" href="mailto:admissions@muhlenberg.edu">
                           <span class="contact_type_label">
                           <span class="contact_type_label_icon">
                           <i class="fa fa-envelope"></i>
                           </span>
                           </span>
                           <span class="contact_type_description" itemprop="email">{{$dashboard_site->admission_email}}</span>
                           </a>
                           <a class="contact_type contact_type_link contact_type_phone" href="tel:484-664-3200">
                           <span class="contact_type_label">
                           <span class="contact_type_label_icon">
                           <i class="fa fa-phone"></i>
                           </span>
                           </span>
                           <span class="contact_type_description" itemprop="telephone">{{$dashboard_site->admission_contact}}</span>
                           </a>
                        </div>
                     </div>
                     <!-- <div class="contact_body">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14133.769573369373!2d85.3184824!3d27.6727186!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x66d083a187176a11!2sVirinchi%20College-%20Kumaripati!5e0!3m2!1sen!2snp!4v1665763828414!5m2!1sen!2snp" width="100%" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div> -->
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
   <!-- Contact us End -->
</main>
@endsection