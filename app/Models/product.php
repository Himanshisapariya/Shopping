<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class product extends Model
{
    use HasFactory;

    function getCategory(){
        return $this->hasMany('App\Models\Category','id','category_id');
    }
    function getBrand(){
        return $this->hasMany('App\Models\Brand','id','brand_id');
    }
}
