<?php

namespace Modules\Testimonial\Entities;

use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    protected $guarded = ['id','created_at','updated_at'];

    public function testimonialCategory(){
        return $this->belongsTo(TestimonialCategory::class);
     }

     public function scopePublished($query){
        return $query->where('publish', 1);
    }
    
}
