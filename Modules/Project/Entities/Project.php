<?php

namespace Modules\Project\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Project extends Model
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

    public function projectGalleries(){
       return $this->hasMany(ProjectGallery::class);
    }

    public function scopePublished($query){
        return $query->where('publish', 1);
    }
}
