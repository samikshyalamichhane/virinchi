<?php

namespace Modules\Gallery\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];

    public function imageGallery(){
        return $this->belongsTo(ImageGallery::class,'image_id');
    }
}
