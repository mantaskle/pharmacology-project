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
