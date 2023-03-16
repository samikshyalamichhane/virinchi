<?php

namespace Modules\IctMela\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class IctMela extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];
    
    public function scopePublished($query){
        return $query->where('publish', 1);
    }
}
