<?php

namespace Modules\ExperienceVirinchi\Entities;
use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Model;

class ExperienceVirinchi extends Model
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
    
}
