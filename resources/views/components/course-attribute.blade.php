<input type="hidden" value="{{$course->id}}" name="course_id">
<div class="row">
    <div class="col-md-6">

        <div class="col-sm-8">
            <div class="form-group">
                <label for="title">Title</label>
                <input name="title" class="form-control" value="">
            </div>
        </div>
        <div class="col-sm-12">
            <div class="form-group">
                <label for="description">Description</label>
                <textarea name="attribute_description" class="form-control"></textarea>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group">
                <label for="publish">Publish</label>
                <br>
                <input id="publish" name="publish" type="checkbox" value="true">
            </div>
        </div>
        <div class="card-footer">
    <button class="btn btn-sm btn-primary" type="submit"> Submit</button>
</div>
    </div>
    <div class="col-md-6">
        <div class="card">
            <div class="card-header"><i class="fa fa-align-justify"></i> courses</div>
            <div class="card-body">
                <table class="table table-responsive-sm table-bordered table-striped table-sm">
                    <thead>
                        <tr>
                            <th>S.N</th>
                            <th>Title</th>
                            <!-- <th>Description</th> -->
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($course->courseAttributes as $key=>$courses)
                        <tr>
                            <td>{{ $key+1 }}</td>
                            <td>{{ $courses->title }}</td>
                            <!-- <td>{!! $courses->attribute_description !!}</td> -->
                            <td>
                                <a href="{{ route('courseattributes.edit',['id'=>$course->id,'course_attribute_id'=>$courses->id])}}#component-1-2" class="btn btn-xs btn-primary">Edit </a>
                                <button data-question="Are you sure to delete the data?" data-toggle="confirm" data-id="{{ $courses->id }}" class="btn btn-xs btn-danger">Delete</button>
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

