<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/search',function (Request $request){
    $keyword = $request->input('keyword');
    return \App\Book::where('title','like','%'.$keyword.'%')->orderBy('title','asc')->with('author','lib')->get();
});
Route::get('/imgcount/{id}',function ($id){
    return \App\Book::find($id)->img_count;
});