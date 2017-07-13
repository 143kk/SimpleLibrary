<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InfoController extends Controller
{
    function img($a,$b,$c){

        $img_path = 'D:\silver/'.$a.'/'.$b.'/'.$c;
        $fp = fopen($img_path, 'rb');
        header('Content-Type: image/jpeg');
        header('Content-Length: ' . filesize($img_path));
        fpassthru($fp);
    }
}
