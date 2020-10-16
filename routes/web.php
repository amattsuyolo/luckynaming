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

Route::get('/test', function () {
    return view('nametest/index');
});
Route::get('/testpost', function () {
    return view('nametest/post');
});
Route::get('/', function () {
    return view('nameformal/index');
});

Route::post('/naming/result', 'NameController@namingResult');

Route::get('/post/{post_id}', 'PostController@postContent');

Route::get('/post', 'PostController@show');

Route::get('/tag/{tag_id}', 'TagController@index')->name('tags');

Route::get('/about', function () {
    return view('nameformal/about');
});