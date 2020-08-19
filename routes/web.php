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

//Route::get('/', function () {
//    return view('welcome');
//});

Route::get('/', 'PagesController@index');

//Route::get('/hello', function () {
//    //return view('welcome');
//    return '<h1>Hello World</h1>';
//});

Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

//Route::get('/users/{id}/{name}', function($id, $name){
//    return 'This is user ' . $name . ' with an id of ' . $id;
//});

Route::resource('blog/posts', 'PostsController');

Auth::routes();

Route::get('/dashboard', 'DashboardController@index')->name('dashboard');
