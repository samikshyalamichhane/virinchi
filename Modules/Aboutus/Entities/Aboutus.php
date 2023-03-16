<?php

namespace Modules\Aboutus\Entities;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Aboutus extends Model
{
    use HasFactory;

    protected $fillable = ['name'];

    public function youtubeVideo($url){
    	$url_string = parse_url($url, PHP_URL_QUERY);
  		parse_str($url_string, $args);
  		return isset($args['v']) ? $args['v'] : false;
    }
}
