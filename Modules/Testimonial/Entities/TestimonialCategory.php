<?php

namespace Modules\Testimonial\Entities;

use Illuminate\Database\Eloquent\Model;

class TestimonialCategory extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function testimonials(){
        return $this->hasMany(Testimonial::class);
     }

     public function scopePublished($query){
        return $query->where('publish', 1);
    }
    
}
