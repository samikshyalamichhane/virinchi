<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;

class CourseAttribute extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function courseee(){
        $this->belongsTo(Course::class);
    }
    
    
}
