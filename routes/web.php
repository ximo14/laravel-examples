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

// route to render view from route
Route::get('user', function () {
    return view('user.show');
})->name('user.show');

// route to render view from controller
Route::get('user/create', 'UserController@create')
    ->name('user.create');

// prefix
Route::prefix('admin')->group(function () {
    // route with parameters
    Route::get('users/{id}/edit', 'UserController@edit')->name('user.edit');
});

// middleware in controller
Route::any('user/{id}/destroy', 'UserController@destroy')
    ->name('user.destroy');

Route::get('user/redirect', function () {
    return view('user.redirect');
})->name('user.redirect');

// store
Route::post('user/store', 'UserController@store')->name('user.store');