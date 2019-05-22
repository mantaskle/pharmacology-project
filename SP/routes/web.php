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
    
    Route::middleware(['approved'])->group(function () {
        Route::get('/home', 'HomeController@index')->name('home');
        Route::get('/edit_profile', 'HomeController@edit')->name('edit');
        Route::get('/profile', 'HomeController@profile')->name('profile');
        Route::get('/vaistu-dozavimas', function () { return view('vaistu-dozavimas');} );    
        Route::get('/vaistai', function () { return view('vaistai');} );        
        Route::get('/rezultatai', function () { return view('rezultatai');} );
        Route::resource('pacients', 'PacientsController');
        Route::resource('prescriptions', 'PrescriptionsController');
        Route::resource('medication', 'DosageController');   
        Route::get('/vaistu-dozavimas', 'DosageController@index');
        Route::get('/vaistai', 'DosageController@showAll');
        Route::get('/vaistas', function() { return view('vaistas');} );
        Route::get('wiki', function() { return view('menu.wiki');} );

        Route::get('event/add','EventController@createEvent');
        Route::post('event/add','EventController@store');
        Route::get('event','EventController@calendar');

        Route::get('new_ticket', 'TicketsController@create');
        Route::post('new_ticket', 'TicketsController@store');
        Route::get('my_tickets', 'TicketsController@userTickets');
        Route::get('tickets/{ticket_id}', 'TicketsController@show');
        Route::post('comment', 'CommentsController@postComment');

    });

    Route::middleware(['admin'])->group(function () {
        Route::get('/users', 'UserController@index')->name('admin.users.index');
        Route::get('/users/{user_id}/approve', 'UserController@approve')->name('admin.users.approve');
        Route::get('/users/{user_id}/destroy', 'UserController@destroy')->name('admin.users.destroy');        
        Route::get('tickets', 'TicketsController@index');
        Route::post('close_ticket/{ticket_id}', 'TicketsController@close');
        
    });

    Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
        Route::resource('home', 'HomeController');
        Route::resource('users', 'UserController');

    });
});
