<?php

namespace App\Http\Controllers;

use App\Author;
use Illuminate\Contracts\Validation\Validator;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function all()
    {
        $title = 'Authors';
        $authors = Author::withCount('books')->paginate(20);
        return view('authors',compact("authors","title"));
    }
    public function one($id)
    {
        if(is_numeric($id)){
            $author = Author::withCount('books')->find($id);
            if(!$author){
                $message = "没有这个作者ID (⊙﹏⊙)b";
                return view('error',compact("message"));
            }else {
                $title = $author->name;
                return view('author', compact("author","title"));
            }
        }else{
            $message = "作者ID必须为num!!!";
            return view('error',compact("message"));
        }
    }
}
