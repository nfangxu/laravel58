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
Route::redirect('/', 'posts', 301);

Auth::routes(['verify' => true]);

Route::middleware('verified')->group(function () {
    Route::get('home', 'HomeController@index')->name('home');
});

Route::prefix('posts')->group(function () {
    Route::get('/', 'PostController@index')->name('posts.index');
    Route::get('{slug}.html', 'PostController@show')->name('posts.show');
});

Route::prefix('tags')->group(function () {
    Route::get('posts/{slug}.html', 'TagController@posts')->name('tags.posts');
});
