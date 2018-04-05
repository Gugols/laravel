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
    return view('pages.landing');
})->name('home');

Auth::routes();

Route::get('/homedome', 'HomeController@index')->name('homedemo');

///////////// posts
// Show a single post (GET)
Route::get('/posts/show/{id}', 'PostController@show')->name('posts.show');

Route::group(['middleware' => ['permission:publish own posts']], function () {
    // Create a new post (GET)
    Route::get('/posts/new', 'PostController@create');
    // Create a new post (POST)
    Route::post('/posts', 'PostController@store')->name('posts.store');
});


Route::get('/posts/edit/{id}', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');


Route::put('/user/{id}', 'UserController@update')->name('user.update');

Route::group(['middleware' => ['permission:delete own posts']], function () {
    // Delete post (GET)
    Route::get('/posts/delete/{id}', 'PostController@destroyShow');
    // Deleta post (DELETE)
    Route::delete('/posts/delete/{id}', 'PostController@destroy')->name('posts.delete');
});


/////////// Comments

Route::post('/posts/{id}/comments', 'CommentController@store')->name('comments.store');



// OAuth Routes
Route::get('/auth/{provider}', 'Auth\SocAuthController@redirectToProvider')->name('social-auth');
Route::get('/auth/{provider}/callback', 'Auth\SocAuthController@handleProviderCallback');




///// User routers

// View User page

Route::get('/user', 'UserController@index')->name('user.index');

Route::get('/user/{id}', 'UserController@show')->name('user.show');

// Update user (GET)
Route::get('/user/{id}/edit', 'UserController@edit')->name('user.edit');

// Update user (PUT)
Route::put('/user/{id}', 'UserController@update')->name('user.update');


// Choose profile type (GET)
Route::get('/user/{id}/select-type', 'UserController@editType')->name('user.select-type');

// Choose profile type (PUT)
Route::put('/user/{id}/select-type', 'UserController@editTypeUpdate')->name('user.select-type-update');


