<?php

namespace Modules\Machine\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Machine extends Model
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
