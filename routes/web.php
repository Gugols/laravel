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

// posts

Route::get('/posts/new', 'PostController@create');

Route::get('/posts/show/{id}', 'PostController@show');

Route::post('/posts', 'PostController@store');

Route::get('/posts/delete/{id}', 'PostController@destroyShow');

Route::delete('/posts/delete/{id}', 'PostController@destroy')->name('posts.delete');

//Route::delete('/posts/delete/{id}', 'PostController@destroy');

// OAuth Routes
Route::get('/auth/{provider}', 'Auth\SocAuthController@redirectToProvider');
Route::get('/auth/{provider}/callback', 'Auth\SocAuthController@handleProviderCallback');

// Profile views

// set profile type
Route::get('/profile/set-type', 'ProfileController@create');

// actually create the profile
Route::post('/profile', 'ProfileController@store')->name('profile.store');

// Edit profile page
Route::get('/profile/edit', 'ProfileController@edit')->name('profile.edit');

// Send editted form data
// Route::put('/profile/edit', 'ProfileController@update');
