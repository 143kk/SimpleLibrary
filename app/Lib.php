<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Lib extends Model
{
    public function books(){
        return $this->hasMany('App\Book','lib_id','id');
    }
}
