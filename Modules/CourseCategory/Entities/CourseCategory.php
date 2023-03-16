<?php

namespace Modules\CourseCategory\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Modules\Course\Entities\Course;

class CourseCategory extends Model
{
    use Sluggable;

    protected $guarded = ['id','created_at','updated_at'];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function courses(){
        return $this->hasMany(Course::class);
     }

     public function scopePublished($query){
        return $query->where('publish', 1);
    }
}
