<?php

namespace Modules\TechNews\Entities;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class TechNews extends Model
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
    public function youtubeVideo($url){
        $convertedUrl = str_replace('https://www.youtube.com/embed/','',$url);
        return $convertedUrl;
    }
    
}
