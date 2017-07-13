<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get('/books','BookController@all');
Route::get('/book/{id}','BookController@one');
Route::get('/authors','AuthorController@all');
Route::get('/author/{id}','AuthorController@one');
Route::get('/libs','LibController@all');
Route::get('/search','BookController@search');
Route::get('/read/{id}','BookController@read');
Route::get('/about','IndexController@about');
/*Route::get('test',function(){
    return \App\Book::find(1);
});*/

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
