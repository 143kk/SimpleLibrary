<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    public function author()
    {
        return $this->belongsTo("App\Author");
    }
    public function lib()
    {
        return $this->belongsTo("App\Lib");
    }
    public function getSizeAttribute($value){
        return round($value / 1048576 * 100) / 100 . ' MB';
    }
    public function getImgCountAttribute($img_count){
        return unserialize($img_count);
    }
}
