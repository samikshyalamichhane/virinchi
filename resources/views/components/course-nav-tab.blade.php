<ul class="plain-nav-tabs nav nav-tabs js-enable-tab-url" id="component-1" role="tablist">
    <li class="nav-item">
        <a class="nav-link {{(\Request::is('admin/course-modules/*/edit') || \Request::is('admin/course-modules/*/create')) || (\Request::is('admin/course-attributes/*/edit') || \Request::is('admin/course-attributes/*/create')) ? '' : 'active'}} info-tab" data-toggle="tab" href="#component-1-1" role="tab" aria-controls="component-1-1" aria-selected="true"><strong>Course Information</strong></a>
    </li>
   
    <li class="nav-item {{(\Request::is('admin/course-modules/*/edit') || \Request::is('admin/course-modules/*/create'))  ? 'active' : ''}}">
        <a class="nav-link {{(\Request::is('admin/course-modules/*/edit') || \Request::is('admin/course-modules/*/create')) ? 'active' : ''}} module-tab" data-toggle="tab" href="#component-1-2" role="tab" aria-controls="component-1-2" aria-selected="true"><strong>Course Modules </strong></a>
    </li>
    <li class="nav-item {{(\Request::is('admin/course-attributes/*/edit') || \Request::is('admin/course-attributes/*/create'))  ? 'active' : ''}}">
        <a class="nav-link {{(\Request::is('admin/course-attributes/*/edit') || \Request::is('admin/course-attributes/*/create')) ? 'active' : ''}} attribute-tab" data-toggle="tab" href="#component-1-3" role="tab" aria-controls="component-1-3" aria-selected="true"><strong>Course Attributes </strong></a>
    </li>
     <li class="nav-item">
        <a class="nav-link gallery-tab" data-toggle="tab" href="#component-1-4" role="tab" aria-controls="component-1-4" aria-selected="true"><strong>Course Gallery</strong></a>
    </li>
    <!-- <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#component-1-4" role="tab" aria-controls="component-1-4" aria-selected="false"><strong>Bank Details </strong></a>
    </li>
    <li class="nav-item">
        <a class="nav-link" data-toggle="tab" href="#component-1-5" role="tab" aria-controls="component-1-5" aria-selected="false"><strong>Shipping And Return Policy </strong></a>
    </li> -->
</ul>