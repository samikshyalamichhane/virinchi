<div class="row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="title">Title</label>
            <input name="title" class="form-control" value="{{ $course->title ?? old('title') }}" required>
        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="short_title">Short Title</label>
            <input name="short_title" class="form-control" value="{{ $course->short_title ?? old('short_title') }}" required>
        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="duration">Duration Of Course</label>
            <input name="duration" class="form-control" value="{{ $course->duration ?? old('duration') }}" required>
        </div>
    </div>
    <div class="col-sm-12">
        <div class="form-group">
            <label for="banner_text">Banner Text</label>
            <textarea name="banner_text" class="form-control">{{ $course->banner_text ?? old('banner_text') }}</textarea>
        </div>
    </div>

    <!-- <div class="form-group col-md-6">
        <label>Select Course Category</label>
        <select name="course_category_id" class="form-control">
            <option value="">-- select one --</option>
            @foreach($coursecategories as $cat)
            <option value="{{$cat->id}}" {{$cat->id==$course->course_category_id?'selected':''}}>{{$cat->title}}</option>
            @endforeach
        </select>
    </div> -->

    <div class="col-sm-12">
        <div class="form-group">
            <label for="overview">Overview</label>
            <textarea name="overview" class="form-control">{{ $course->overview ?? old('overview') }}</textarea>
        </div>
    </div>


    <div class="col-sm-12">
        <div class="form-group">
            <label for="scope">Scope</label>
            <textarea name="scope" class="form-control" id="scope">{{ $course->scope ?? old('scope') }}</textarea>
        </div>
    </div>

    <div class="col-sm-12">
        <div class="form-group">
            <label for="eligibility">Eligibility</label>
            <textarea name="eligibility" class="form-control" id="eligibility">{{ $course->eligibility ?? old('eligibility') }}</textarea>
        </div>
    </div>

</div>
<div class="form-group row">
    <div class="col-sm-6">
        <div class="form-group">
            <label for="publish">Image</label>
            <input type="file" name="image" class="form-control" onchange="preview()">
            <img id="frame" src="{{ Storage::url($course->image) }}" width="100px" height="100px" />

        </div>
    </div>
    <div class="col-sm-6">
        <div class="form-group">
            <label for="publish">Banner Image</label>
            <input type="file" name="banner_image" class="form-control" onchange="bannerImagepreview()">
            <img id="frame" src="{{ Storage::url($course->banner_image) }}" width="100px" height="100px" />

        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="publish">Scope Image</label>
            <input type="file" name="scope_image" class="form-control" onchange="scopeImagePreview()">
            <img id="frame1" src="{{ Storage::url($course->scope_image) }}" width="100px" height="100px" />

        </div>
    </div>

    <div class="col-sm-6">
        <div class="form-group">
            <label for="publish">Publish</label>
            <br>
            <input id="publish" name="publish" type="checkbox" value="true" {{
                                            $course->publish?'checked':'' }}>

        </div>
    </div>
</div>
<div class="card-footer">
    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
</div>