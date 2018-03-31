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
//Route::get('/user/set-type', 'UserController@create')->name('user.set-type');

// actually create the profile
 Route::put('/user/{id}', 'UserController@update')->name('user.update');

// Edit profile page
Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');

Route::get('/user/{id}/select-type', 'UserController@editType')->name('user.select-type');

Route::put('/user/{id}/select-type', 'UserController@editTypeUpdate')->name('user.select-type-update');

// Send editted form data
// Route::put('/profile/edit', 'ProfileController@update');
