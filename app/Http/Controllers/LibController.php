<?php

namespace App\Http\Controllers;

use App\Lib;
use Illuminate\Http\Request;

class LibController extends Controller
{
    public function all(){
        $libs = Lib::withCount("books")->get();
        $title = 'Libraries';
        return view("libs",compact("libs","title"));
    }
}
