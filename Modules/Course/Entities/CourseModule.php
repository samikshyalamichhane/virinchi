<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;

class CourseModule extends Model
{

    protected $guarded = ['id','created_at','updated_at'];

    public function coursee(){
        $this->belongsTo(Course::class);
    }
    
}
