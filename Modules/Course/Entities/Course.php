<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Course extends Model
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

    public function courseGalleries(){
       return $this->hasMany(CourseGallery::class);
    }

    public function courseModules(){
        return $this->hasMany(CourseModule::class);
     }

     public function courseAttributes(){
        return $this->hasMany(CourseAttribute::class);
     }

    public function scopePublished($query){
        return $query->where('publish', 1);
    }
    
}
