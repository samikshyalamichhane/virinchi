<?php

namespace Modules\Course\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class CourseGallery extends Model
{

    protected $guarded = ['id','created_at','updated_at'];
    public function course(){
        $this->belongsTo(Course::class);
    }

    public function imageUrl($size = null)
    {
        if ($size == 'thumbnail' && $this->thumbnail_path) {
            return Storage::disk('public')->url($this->thumbnail_path);
        }

        return Storage::disk('public')->url($this->path);
    }

    public static function getReadableSize($bytes)
    {
        $units = ['B', 'KB', 'MB', 'GB', 'TB', 'PB'];

        for ($i = 0; $bytes > 1024; $i++) {
            $bytes /= 1024;
        }

        return round($bytes, 2) . ' ' . $units[$i];
    }

}
