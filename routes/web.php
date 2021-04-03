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
})->name("index");

Route::post('/naming/result', 'NameController@namingResult');

Route::get('/post/{post_id}', 'PostController@postContent')->name('content');

Route::get('/post/amp/{post_id}', 'PostController@postAmpContent')->name('amp-content');

Route::get('/post', 'PostController@show');

Route::get('/tag/{tag_id}', 'TagController@index')->name('tags');

//六十甲子籤
Route::get('/sign', 'SignController@index')->name('sixty.sign');
Route::get('/sign/{sign}', 'SignController@show')->name('sixty.sign_content');

Route::get('/about', function () {
    return view('nameformal/about');
});

Route::get('/for-tiffany', function () {
    return view('card');
});