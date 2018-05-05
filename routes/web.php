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

////// posts
// Show a single post (GET)
Route::get('/posts/{id}', 'PostController@show')->name('posts.show');

Route::group(['middleware' => ['permission:publish own posts']], function () {
    // Create a new post (GET)
    Route::get('/posts/create', 'PostController@create');
    // Create a new post (POST)
    Route::post('/posts', 'PostController@store')->name('posts.store');
});


Route::get('/posts/edit/{id}', 'PostController@edit')->name('posts.edit');
Route::put('/posts/{id}', 'PostController@update')->name('posts.update');


Route::put('/user/{id}', 'UserController@update')->name('user.update');

Route::group(['middleware' => ['permission:delete own posts']], function () {
    // Delete post (GET)
    Route::get('/posts/delete/{id}', 'PostController@destroyShow');
    // Delete post (DELETE)
    Route::delete('/posts/delete/{id}', 'PostController@destroy')->name('posts.delete');
});


/////////// Comments

Route::post('/posts/{id}/comments', 'CommentController@store')->name('comments.store');
Route::delete('/comments/{id}/delete', 'CommentController@destroy')->name('comments.delete');



////// OAuth Routes
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



////// Wallet & Cards


Route::get('/wallet', 'WalletController@index')->name('wallet.index');
Route::get('/wallet/create', 'WalletController@create')->name('wallet.create');
Route::post('/wallet/create', 'WalletController@store')->name('wallet.store');

Route::get('/cards/new', 'CardController@create')->name('card.create');
Route::post('/cards', 'CardController@store')->name('card.store');
Route::delete('/cards/{id}/delete', 'CardController@destroy')->name('card.delete');

Route::get('/charges/new', 'ChargeController@create')->name('charge.create');
Route::post('/charges', 'ChargeController@store')->name('charge.store');


//////  Donations

Route::get('/donations/{id}/create', 'DonationController@create')->name('donations.create');
Route::post('/donations', 'DonationController@store')->name('donations.store');
Route::get('/donations', 'DonationController@index')->name('donations.index');
Route::get('/donations/{id}', 'DonationController@show')->name('donations.show');
Route::delete('/donations/{id}/delete', 'DonationController@destroy')->name('donations.destroy');

//////  messages

Route::group(['prefix' => 'messages'], function () {
    Route::get('/', ['as' => 'messages', 'uses' => 'MessagesController@index']);
    Route::get('create/{id}', ['as' => 'messages.create', 'uses' => 'MessagesController@create']);
    Route::post('/', ['as' => 'messages.store', 'uses' => 'MessagesController@store']);
    Route::get('{id}', ['as' => 'messages.show', 'uses' => 'MessagesController@show']);
    Route::put('{id}', ['as' => 'messages.update', 'uses' => 'MessagesController@update']);
});