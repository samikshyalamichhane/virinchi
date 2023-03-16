<?php

namespace Modules\Gallery\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class ImageGallery extends Model
{
    use HasFactory;

    protected $fillable = ['title','slug','description','images','publish'];

    
    public  function imagess()
    {
        return $this->hasMany(Image::class,'image_id','id');
    }

    
}
