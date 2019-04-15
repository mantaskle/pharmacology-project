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

Route::get('/apie-mus', function () {
    return view('apie-mus');
});

Route::get('/kontaktai', function () {
    return view('kontaktai');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/approval', 'HomeController@approval')->name('approval');    
    Route::get('/edit_profile', 'HomeController@edit_profile')->name('edit_profile');
    Route::get('/profile', 'HomeController@profile')->name('profile');

    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', 'UserController@index')->name('admin.users.index');
        Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
        Route::get('/users/{user_id}/destroy', 'UserController@destroy')->name('admin.users.destroy');
        
    });

    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
        Route::resource('home', 'HomeController');
        Route::resource('users', 'UserController');
    });
});
