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
Route::get('/','PostController@getindex');
Route::get('/home','PostController@home');
Route::get('/profile','PostController@profile');
Route::get('/homepage', 'PostController@indexpage');
Auth::routes();
Route::post('/tweet','TweetController@store');
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/tweet/{id}','TweetController@destroy');
Route::get('/info','AvatarController@upload');
Route::post('/avatar','AvatarController@update_avatar');
Route::post('/comment/{id}','CommentController@store');
Route::get('/comment/{id}','CommentController@destroy');
Route::get('/cedit/{id}','CommentController@edit');
Route::get('/edit/{id}','TweetController@edit');
Route::post('/update/{id}','TweetController@update');
Route::get('/like/{id}','likeController@store');
Route::get('/dislike/{id}','likeController@dislike');
Route::get('/show','likeController@show');
Route::get('/find', 'likeController@index');
Route::post('/follow', 'FollowController@store');
// Route::post('/comment','CommentController@store');