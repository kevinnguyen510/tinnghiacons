<?php

use Illuminate\Support\Facades\Route;

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
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('test', function () {
    return view('test');
})->middleware('auth');

Route::get('/', function () {
    return view('welcome');
})->name("/");

//Post
Route::get('/add-post','PostController@add_post');
Route::post('/add-post','PostController@post_add_post');
Route::post('/edit-post/{post_id}','PostController@edit_post');
Route::get('/delete-post/{post_id}','PostController@delete_post');
Route::get('/all-post','PostController@all_post');
//Category Post
Route::get('/add-categoryPost','CategoryPostController@add_categoryPost');
Route::post('/add-categoryPost','CategoryPostController@post_add_categoryPost');
Route::post('/edit-categoryPost/{category_id}','CategoryPostController@edit_categoryPost');
Route::get('/delete-categoryPost/{category_id}','CategoryPostController@delete_categoryPost');
Route::get('/all-categoryPost','CategoryPostController@all_categoryPost');
//User
Route::get('/add-user','UserController@add_user');
Route::post('/add-user','UserController@post_add_user');
Route::post('/edit-user/{user_id}','UserController@edit_user');
Route::get('/delete-user/{user_id}','UserController@delete_user');
Route::get('/all-user','UserController@all_user');


