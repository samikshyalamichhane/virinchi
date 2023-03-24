<?php

namespace Modules\Admission\Entities;

use Illuminate\Database\Eloquent\Model;

class Admission extends Model
{

    protected $guarded = ['id','created_at','updated_at'];
    protected $casts = [ 'date'=>'datetime'];
    
}
