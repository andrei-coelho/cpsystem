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

Route::group(['middleware' => 'auth'], function () {

    Route::get('/', function ()    {
        return view('pages.home');
    });

    Route::get('user/profile', function () {
        // Uses Auth Middleware
    });

});



/**
 * retirar as rotas do auth e coloca-las manualmente
*/
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


