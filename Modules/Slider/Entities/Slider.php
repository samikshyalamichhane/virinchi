<?php

namespace Modules\Slider\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Slider extends Model
{
    protected $guarded = ['id','created_at','updated_at'];
    
    // public function imageUrl()
    // {
    //     return Storage::disk('public')->url($this->image);
    // }
}
