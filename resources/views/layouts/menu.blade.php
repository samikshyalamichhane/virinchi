<li class="c-sidebar-nav-item">
    <a class="c-sidebar-nav-link c-active" href="{{ route('dashboard') }}">
        <i class="c-sidebar-nav-icon cil-home"></i>Dashboard
    </a>
    @can('View Role')
    <a class="c-sidebar-nav-link" href="{{ route('role.index') }}">
        <i class="c-sidebar-nav-icon cib-microsoft"></i>Role
    </a>
    @endcan
    @can('View User')
    <a class="c-sidebar-nav-link" href="{{ route('user.index') }}">
        <i class="c-sidebar-nav-icon cil-user-follow"></i>User
    </a>
    @endcan
    {{--
    @can('View User')
    <a class="c-sidebar-nav-link" href="{{ route('customersList') }}">
        <i class="c-sidebar-nav-icon cil-user-follow"></i>Customers
    </a>
    @endcan --}}
    @can('Update SiteInfo')
    <a class="c-sidebar-nav-link" href="{{ route('site.index') }}">
        <i class="c-sidebar-nav-icon fab fa-battle-net"></i>Site Settings
    </a>
    @endcan
    @can('View Aboutus')
    <a class="c-sidebar-nav-link" href="{{ route('club.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Clubs
    </a>
    @endcan
    @can('View Aboutus')
    <a class="c-sidebar-nav-link" href="{{ route('ictmela.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Ict Mela
    </a>
    @endcan
    {{--@can('View Aboutus')
    <a class="c-sidebar-nav-link" href="{{ route('aboutus.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>About Us
    </a>
    @endcan--}}
    
    @can('View Gallery')
    <a class="c-sidebar-nav-link" href="{{ route('gallery.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Gallery
    </a>
    @endcan
    {{--@can('View Slider')
    <a class="c-sidebar-nav-link" href="{{ route('slider.index') }}">
        <i class="c-sidebar-nav-icon cib-microsoft"></i>Slider
    </a>
    @endcan--}}
    @can('View News')
    <a class="c-sidebar-nav-link" href="{{ route('events.index') }}">
        <i class="c-sidebar-nav-icon cib-microsoft"></i>Events
    </a>
    @endcan
    <a class="c-sidebar-nav-link" href="{{ route('courses.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Programs
    </a>
    @can('View Technews')
    <a class="c-sidebar-nav-link" href="{{ route('technews.index') }}">
        <i class="c-sidebar-nav-icon cib-microsoft"></i>Tech News
    </a>
    @endcan
   
    @can('View Testimonial')
    <li class="c-sidebar-nav-dropdown">

        <a class="c-sidebar-nav-dropdown-toggle" href="{{ route('testimonial.index') }}">
            <i class="c-sidebar-nav-icon cib-microsoft"></i>Testimonial
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li><a class="c-sidebar-nav-link" href="{{ route('testimonial.create') }}">
            Testimonial create
        </a></li>
        <li><a class="c-sidebar-nav-link" href="{{ route('testimonial.index') }}">
            Testimonial List
        </a></li>
        <li><a class="c-sidebar-nav-link" href="{{ route('testimonialcategory.create') }}">
            Testimonial Category List
        </a></li>
        </li>
        <!-- <li><a class="c-sidebar-nav-link" href="{{ route('testimonialcategory.create') }}">
            Testimonial Category Create
        </a></li> -->
        </ul>
    </li>
    @endcan
    @can('View Projects')
    <a class="c-sidebar-nav-link" href="{{ route('college.index') }}">
        <i class="c-sidebar-nav-icon fas fa-exclamation-triangle"></i>College
    </a>
    @endcan 
    @can('View EducationModel')
    <a class="c-sidebar-nav-link" href="{{ route('education-model.index') }}">
        <i class="c-sidebar-nav-icon fas fa-exclamation-triangle"></i>Education Model
    </a>
    @endcan
   {{-- @can('View Projects')
    <a class="c-sidebar-nav-link" href="{{ route('projects.index') }}">
        <i class="c-sidebar-nav-icon fas fa-exclamation-triangle"></i>Project
    </a>
    @endcan  
    @can('View Product')
    <a class="c-sidebar-nav-link" href="{{ route('product.index') }}">
        <i class="c-sidebar-nav-icon fab fa-acquisitions-incorporated"></i>Products
    </a>
    @endcan
    @can('View Service')
    <a class="c-sidebar-nav-link" href="{{ route('service.index') }}">
        <i class="c-sidebar-nav-icon fas fa-exclamation-triangle"></i>Service
    </a>
    @endcan 
    @can('View Partner')
    <a class="c-sidebar-nav-link" href="{{ route('partner.index') }}">
        <i class="c-sidebar-nav-icon fas fa-handshake"></i>Partner
    </a>
    @endcan
    @can('View Client')
    <a class="c-sidebar-nav-link" href="{{ route('client.index') }}">
        <i class="c-sidebar-nav-icon fas fa-users"></i>Client
    </a>
    @endcan --}}
    @can('View Page')
    <a class="c-sidebar-nav-link" href="{{ route('page.index') }}">
        <i class="c-sidebar-nav-icon fab fa-pagelines"></i>Page
    </a>
    @endcan
    @can('View Faq')
    <a class="c-sidebar-nav-link" href="{{ route('faq.index') }}">
        <i class="c-sidebar-nav-icon fab fa-pagelines"></i>Faq
    </a>
    @endcan

    @can('View DocumentCheckList')
    <a class="c-sidebar-nav-link" href="{{ route('document-check-list.index') }}">
        <i class="c-sidebar-nav-icon fab fa-pagelines"></i>Document Check List
    </a>
    @endcan

    @can('View ExperienceVirinchi')
    <a class="c-sidebar-nav-link" href="{{ route('experience-virinchi.index') }}">
        <i class="c-sidebar-nav-icon fab fa-pagelines"></i>Experience Virinchi
    </a>
    @endcan

    

    @can('View Testimonial')
    <li class="c-sidebar-nav-dropdown">

        <a class="c-sidebar-nav-dropdown-toggle" href="{{ route('testimonial.index') }}">
            <i class="c-sidebar-nav-icon cib-microsoft"></i>Enrollment
        </a>
        <ul class="c-sidebar-nav-dropdown-items">
            <li><a class="c-sidebar-nav-link" href="{{ route('enrollment.index') }}">
            Enrollment List
        </a></li>
        <li><a class="c-sidebar-nav-link" href="{{ route('appointmentLists') }}">
            Appointment List
        </a></li>
        <li><a class="c-sidebar-nav-link" href="{{ route('applicationLists') }}">
            Application List
        </a></li>
        </li>
        <li><a class="c-sidebar-nav-link" href="{{ route('requestInfoLists') }}">
            Request Info lists
        </a></li>
        </ul>
    </li>
    @endcan
    @can('View Admission')
    <a class="c-sidebar-nav-link" href="{{ route('admission.index') }}">
        <i class="c-sidebar-nav-icon fab fa-pagelines"></i>Admission
    </a>
    @endcan
    

     <!-- @can('View Page')
    <a class="c-sidebar-nav-link" href="{{ route('page.index') }}">
        <i class="c-sidebar-nav-icon fab fa-pagelines"></i>Page
    </a>
    @endcan
    @can('View Team')
    <a class="c-sidebar-nav-link" href="{{ route('team.index') }}">
        <i class="c-sidebar-nav-icon fas fa-user-friends"></i>Team
    </a>
    @endcan

    @can('View Testimonial')
    <a class="c-sidebar-nav-link" href="{{ route('testimonial.index') }}">
        <i class="c-sidebar-nav-icon fas fa-quote-left"></i>Testimonial
    </a>
    @endcan

    @can('View Blog')
    <a class="c-sidebar-nav-link" href="{{ route('blog.index') }}">
        <i class="c-sidebar-nav-icon fas fa-blog"></i>Blog
    </a>
    @endcan
    @can('View Contactus')
    <a class="c-sidebar-nav-link" href="{{ route('contactus.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Contact Us
    </a>
    @endcan
     @can('View Contactus')
    <a class="c-sidebar-nav-link" href="{{ route('contactus.productInquiry') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Product Inquiry
    </a>
    @endcan -->
    
    {{--<a class="c-sidebar-nav-link" href="{{ route('coursecategory.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Course Category
    </a>
    <a class="c-sidebar-nav-link" href="{{ route('courses.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Courses
    </a>
    @can('View Page')
    <a class="c-sidebar-nav-link" href="{{ route('page.index') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Page
    </a>
    @endcan

    @can('View Contactus')
    <a class="c-sidebar-nav-link" href="{{ route('subscribe') }}">
        <i class="c-sidebar-nav-icon fas fa-id-card-alt"></i>Subscribes List
    </a>
    @endcan--}}

</li>
