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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get("/demo","HomeController@demo");

Route::get("/book","BookController@BookList");

Route::get("book/create","BookController@BookCreate");
Route::post("book/create","BookController@BookSave");

Route::get("book/edit","BookController@BookEdit");
Route::post("book/edit","BookController@BookUpdate");

Route::get("book/delete/{book_id}","BookController@BookDelete");

Route::get("author/detail/{author_id}","AuthorController@show");