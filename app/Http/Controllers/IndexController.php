<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function about()
    {
        $title = 'Contact';
        return view('about',compact("title"));
    }
}
