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
        return view('pages.home', ['pag' => 'home']);
    });

    // inclui todas as rotas internas do pacote App\Routes
    foreach ([
        "emails", "contatos"
    ] as $file)
    ("App\\Routes\\".ucfirst($file."Route"))::routes();

});

/**
 * retirar as rotas do auth e coloca-las manualmente
*/
Auth::routes();
