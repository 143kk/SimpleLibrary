<?php

namespace App\Http\Controllers;

use App\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function all()
    {
        $title = 'Books';
        $books = Book::with('author')->paginate(20);
        return view('books',compact("books","title"));
    }
    public function one($id)
    {
        if(is_numeric($id)){
            $book = Book::with('author')->find($id);
            if($book){
                $title = $book->title;
                return view('book',compact("book","title"));
            }else{
                $message = "书籍ID不存在哦～";
                return view('error',compact("message"));
            }
        }else{
            $message = "书籍ID只能是num哦～";
            return view('error',compact("message"));
        }
    }
    public function search(){
        $title = 'Search';
        return view('search',compact("title"));
    }
    public function read($id){
        $book = Book::find($id);
        if(!$book){
            $message = '这本书不存在！！！';
            return view('error',compact("message"));
        }else{
            $epub_url = config('resources.epub').'/'.$book->lib->id.'/'.$book->author->id.'/'.$book->id.'.epub';
            return view('read',compact("epub_url"));
        }
    }
}
