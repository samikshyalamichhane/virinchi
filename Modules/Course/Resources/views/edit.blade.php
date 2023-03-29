@extends('layouts.app')
@section('breadcrumb')
<ol class="breadcrumb border-0 m-0">
    <li class="breadcrumb-item">Dashboard</li>
    <li class="breadcrumb-item"><a href="{{ route('courses.index') }}">course</a></li>
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
            <div class="card">
                <div class="card-header">
                    <x-course-nav-tab></x-course-nav-tab>
                </div>

                <div class="card-body">
                    <div class="tab-content" id="component-1-content">
                        <div class="tab-pane fade show active" id="component-1-1" role="tabpanel" aria-labelledby="component-1-1">
                            <form method="post" action="{{ route('courses.update',$course->id) }}" enctype="multipart/form-data">
                                @csrf
                                <x-course-detail :course='$course' :coursecategories='$coursecategories'></x-course-detail>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="component-1-2" role="tabpanel" aria-labelledby="component-1-2">
                            <form method="post" action="{{ route('coursemodule.store') }}" enctype="multipart/form-data">
                                @csrf
                                <x-course-module :course='$course' :courses='$courses'></x-course-module>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="component-1-3" role="tabpanel" aria-labelledby="component-1-3">
                            <form method="post" action="{{ route('courseattribute.store') }}" enctype="multipart/form-data">
                                @csrf
                                <x-course-attribute :course='$course' :courses='$courses'></x-course-attribute>
                            </form>
                        </div>
                        <div class="tab-pane fade show" id="component-1-4" role="tabpanel" aria-labelledby="component-1-4">
                            <div>
                                <div class="white p-3">
                                    <form id="myAwesomeDropzone" action="{{ route('coursegallery.store') }}" method="post" class="dropzone rounded" enctype="form-data/multipart">
                                       <input type="hidden" value="{{$course->id}}" name="course_id">
                                        @csrf
                                        <div class="fallback">
                                            <input name="file" type="file" accept="image/*" multiple />
                                        </div>
                                        <div class="dz-default dz-message">
                                            <div class="mb-3" style="color: #2d4dd6;">
                                                <svg fill="none" stroke="currentColor" style="height: 4rem; width: 4rem;" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                                                    <path stroke-linecap="round" stroke-linejoin="round" stroke-width="1" d="M7 16a4 4 0 01-.88-7.903A5 5 0 1115.9 6L16 6a5 5 0 011 9.9M15 13l-3-3m0 0l-3 3m3-3v12"></path>
                                                </svg>
                                            </div>
                                            <span><b>Drag & Drop</b> product images here</span>
                                            <div class="my-3">
                                                or
                                            </div>
                                            <div>
                                                <div class="btn btn-primary border-0" style="background-color: #2d4dd6;">Browse Images</div>
                                            </div>
                                        </div>
                                        <!-- <input type="number" name="course_id" value="{{ @$course->id }}" hidden="true"> -->
                                        <!-- <input type="number" name="course_id" value="1" hidden="true"> -->
                                        <div class="dropzone-previews"></div>
                                    </form>

                                    <p class="mt-2">* Maximum upload file size is 2MB.</p>

                                    <div id="images-loading" class="text-center pt-4">
                                        <div class="spinner-grow text-primary" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-secondary" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-success" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-danger" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-warning" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-info" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                        <div class="spinner-grow text-dark" role="status">
                                            <span class="sr-only">Loading...</span>
                                        </div>
                                    </div>

                                    <div class="container-fluid bg-white rounded mt-4 p-4">
                                        <div id="productImages" class="row">
                                        </div>
                                    </div>
                                </div>

                                <script type="text/template" id="image-template">
                                    <div class="col-6 col-sm-6 col-md-3 col-xl-2 mb-4">
                                    <div class="img-wrap bg-ight border">
                                        <div class="bg-white">
                                            <img class="img-fluid" src="" alt="">
                                        </div>
                                        <div class="d-flex py-2 px-3 border border-bottom-0 border-right-0 border-left-0 border-top">
                                            <div>
                                                <div class="dimension"></div> 
                                                <!-- <div class="file-size"></div> -->
                                            </div>
                                            <div class="ml-auto">
                                                <button class="del-image-btn p-2"><svg style="height: 1.5rem; width: 1.5rem;" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg></button>
                                            </div>
                                        </div>
                                    </div>
                                
                            </div>
                            <script type="text/template" id="no-image-template">
                                <div id="no-image">
                                    <div class="image-icon">
                                        <i class="far fa-image"></i>
                                    </div>
                                    <div class="text">
                                        <strong>OOPS !!</strong>
                                        No Images to show
                                    </div>
                                </div>
                                
                            </script>
                        </div>
                    </div>
                </div>
            </div>
            </div>
        </div>
    </div>
</div>
@endsection
@push('page_scripts')
<style>
    /*==========
            * Dropzone
            ===========*/

    .dropzone {
        border: 2px dashed #5370e9;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: #333;
        font-weight: 600;
    }

    @media screen AND (min-width: 600px) {
        .dropzone {
            min-height: 300px;
        }
    }

    #productImages .img-wrap {
        display: block;
        background-color: #fff;
        border-radius: 5px;
        overflow: hidden;
    }

    #productImages .img-wrap img {
        overflow: hidden;
        width: 100%;
        aspect-ratio: 900 / 900;
    }

    #productImages .img-wrap .del-image-btn {
        background-color: transparent;
        border: 0px;
        outline: none;
        border-radius: 50%;
        line-height: 1;
        color: #f55252;
        transition: background-color 150ms ease-in;
    }

    #productImages .img-wrap .del-image-btn:hover {
        background-color: whitesmoke;
    }

    #no-image {
        text-align: center;
        background-color: #fff;
        padding: 20px;
    }

    #no-image .image-icon {
        font-size: 72px;
        color: #a5a5a5;
    }

    #no-image .text {
        font-style: italic;
    }

    /* Left sidebar */
    /* Scrollable content in sidebar only in large screens */
    @media screen AND (min-width: 600px) {
        .page-sidebar {
            position: fixed;
            height: calc(100vh - 56px);
            min-height: calc(100vh - 56px);
        }

        #sidebar-collapse {
            height: 100%;
            display: flex;
            flex-direction: column;
        }

        #sidebar-collapse .side-menu {
            flex-grow: 1;
            overflow-y: auto;
            padding-bottom: 100px;
            scrollbar
        }

        .side-menu::-webkit-scrollbar {
            width: 10px;
        }

        .side-menu::-webkit-scrollbar-thumb {
            background-color: transparent;
            border-radius: 4px;
        }

        .side-menu:hover::-webkit-scrollbar-thumb {
            background: rgba(255, 255, 255, 0.4);
        }

        .side-menu::-webkit-scrollbar-thumb:hover {
            background: #778af1;
        }
    }
</style>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link href="{{ asset('assets/dropzone/dist/dropzone.css') }}" rel="stylesheet">
<script type="text/javascript" src="{{ asset('assets/dropzone/dist/dropzone.js') }}"></script>

<script>
    Dropzone.autoDiscover = false;
    $(function() {
        var images = $('#productImages');
        var imageTemplate = $('#image-template').html();
        var noImageTemplate = $('#no-image-template').html();
        var deleteUrl = "{{ route('coursegallery.delete', 'IMAGE_ID') }}";
        console.log(deleteUrl);

        function renderImageTemplate(image) {
            var templateItem = $(imageTemplate);
            templateItem.find('img').attr('src', image.url);
            templateItem.find('.del-image-btn').attr('data-id', image.id)
            if (image.width) {
                templateItem.find('.dimension').text(image.width + '×' + image.height);
            }
            templateItem.find('.file-size').text(image.readable_size);
            images.append(templateItem);
        }

        function renderNoImageTemplate() {
            images.append(noImageTemplate)
        }
        $.ajaxSetup({
            headers: {
                'X-CSRF-TOKEN': "{{ csrf_token() }}"
            }
        });

        function loadImages() {
            $('#images-loading').show();
            $.ajax("{{ route('ajax.product-images.listing', $course) }}", {
                dataType: 'json',
                success: function(data, status, xhr) {
                    // console.log(data);
                    images.empty();
                    console.log(typeof(data));
                    if (jQuery.isEmptyObject(data)) {
                        renderNoImageTemplate();
                    } else {
                        data.forEach(function(image) {
                            renderImageTemplate(image);
                        });
                    }
                },
                error: function(jqXhr, textStatus, errorMessage) {
                    console.log(errorMessage);
                }
            }).done(function() {
                $('#images-loading').hide();
            });
            console.log("Images Reloaded");
        }

        loadImages();

        var myAwesomeDropzone = new Dropzone("form#myAwesomeDropzone", {
            acceptedFiles: '.png,.jpg,.jpeg,.gif',
            previewsContainer: '.dropzone-previews',
            maxFilesize: 2,
            init: function() {
                var myDropzone = this;
                this.on("error", function(file, message) {
                    Swal.fire({
                        title: message,
                        icon: 'error',
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000
                    });
                    this.removeFile(file);
                });
                this.on("sendingmultiple", function() {});
                this.on("successmultiple", function(files, response) {
                    console.log(response);
                });
                this.on("errormultiple", function(files, response) {
                    console.log('error multiple');
                    console.log(response);
                });
                this.on('success', function(file, response) {
                    console.log('Successful upload');
                    Swal.fire({
                        title: 'Product Image Saved',
                        icon: 'success',
                        toast: true,
                        position: "top-end",
                        showConfirmButton: false,
                        timer: 3000
                    });
                    loadImages();
                });
                this.on('complete', function(file, response) {
                    console.log('upload complete');
                    this.removeFile(file);
                });
            }
        });

        images.on('click', '.del-image-btn', function(e) {
            event.preventDefault();
            var con = false;
            Swal.fire({
                    icon: 'question',
                    title: 'Are you sure?',
                    text: 'Do you really want to delete this product image? This action cannot be undone.',
                    showCancelButton: true,
                    confirmButtonText: 'Ok',
                })
                .then((result) => {
                    if (result.isConfirmed) {
                        console.log($(this).data('id'));
                        var dummyUrl = deleteUrl;
                        var imageDeleteUrl = dummyUrl.replace(/IMAGE_ID/, $(this).data('id'));
                        $(this).hide();
                        $.ajax({
                                url: imageDeleteUrl,
                                type: 'POST',
                                data: {
                                    _method: 'delete'
                                }
                            })
                            .done(function(response) {
                                console.log("success");
                                Swal.fire({
                                    title: 'Product Image Deleted Successfully!',
                                    icon: 'success',
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                            })
                            .fail(function(response) {
                                console.log("error");
                                Swal.fire({
                                    title: 'Something Went wrong! Please try again later!',
                                    icon: 'error',
                                    toast: true,
                                    position: "top-end",
                                    showConfirmButton: false,
                                    timer: 3000
                                });
                            })
                            .always(function() {
                                loadImages();
                                console.log("complete");
                            });
                    }
                })
        });
    });
</script>

<script src="https://cdn.ckeditor.com/4.18.0/standard-all/ckeditor.js"></script>
<script>
    function preview() {
        frame.src = URL.createObjectURL(event.target.files[0]);
    }

    function scopeImagePreview() {
        frame1.src = URL.createObjectURL(event.target.files[0]);
    }
</script>
<script>
    var options = {
        filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
        filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
        filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
        filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=',
        extraPlugins: ['image2','colorbutton','basicstyles'],

    };
</script>
<script>
    CKEDITOR.replace('overview', options);
    CKEDITOR.replace('scope', options);
    CKEDITOR.replace('eligibility', options);
    CKEDITOR.replace('description', options);
    CKEDITOR.replace('attribute_description', options);
</script>
<script>
  var triggerEl = document.querySelector('#component-1-2')
// var tab = bootstrap.Tab.getInstance(triggerEl)
$(document).ready(function() { 
    $('a[href="' + component-1-1 + '"]').removeClass('active');
    $('a[href="' + triggerEl + '"]').addClass('active');
    $('a[href="' + triggerEl + '"]').parent().addClass('active');
 })
</script>
<script>
    $(function(){
        $('[data-toggle="confirm"]').jConfirm().on('confirm', function(e){
            var btn = $(this),
            id = btn.data('id');
            var url = '{{ route("coursemodules.delete", ":id") }}';
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
                var url = '{{ route("coursemodules.delete", ":id") }}';
                url = url.replace(':id', id);
                window.location=url
                });
            }
        });
    });

</script>

<script>
    $(function(){
        $('[data-toggle="confirm"]').jConfirm().on('confirm', function(e){
            var btn = $(this),
            id = btn.data('id');
            var url = '{{ route("courseattributes.delete", ":id") }}';
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
                var url = '{{ route("courseattributes.delete", ":id") }}';
                url = url.replace(':id', id);
                window.location=url
                });
            }
        });
    });

</script>
@endpush