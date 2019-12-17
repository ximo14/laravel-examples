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

// COURSE CONTROLLER
Route::get('course/index', 'CoursesController@index')
    ->name('course.index');

Route::get('course/create', 'CoursesController@create')
    ->name('course.create');

Route::post('course/store', 'CoursesController@store')
    ->name('course.store');

Route::get('course/{id}', 'CoursesController@show')
    ->name('course.show');

Route::get('course/{id}/edit', 'CoursesController@edit')
    ->name('course.edit');

Route::put('course/{id}', 'CoursesController@update')
    ->name('course.update');

Route::delete('course/{id}/destroy', 'CoursesController@destroy')
    ->name('course.destroy');

// FLIGHT ROUTING

Route::get('flight/index', 'FlightController@index')
    ->name('flight.index');

Route::get('flight/create', 'FlightController@create')
    ->name('flight.create');

Route::post('flight/store', 'FlightController@store')
    ->name('flight.store');

Route::get('flight/{id}', 'FlightController@show')
    ->name('flight.show');

// STUDENT ROUTING
Route::get('student/index', 'StudentsController@index')
    ->name('student.index');

Route::get('student/create', 'StudentsController@create')
    ->name('student.create');

Route::post('student/store', 'StudentsController@store')
    ->name('student.store');

Route::get('student/{id}', 'StudentsController@show')
    ->name('student.show');

Route::get('student/{id}/edit', 'StudentsController@edit')
    ->name('student.edit');

Route::put('student/{id}', 'StudentsController@update')
    ->name('student.update');

Route::delete('student/{id}/destroy', 'StudentsController@destroy')
    ->name('student.destroy');