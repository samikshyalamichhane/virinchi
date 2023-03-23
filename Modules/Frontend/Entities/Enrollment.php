<?php

namespace Modules\Frontend\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Enrollment extends Model
{
    use HasFactory;

    protected $guarded = ['id','created_at','updated_at'];
    
}
