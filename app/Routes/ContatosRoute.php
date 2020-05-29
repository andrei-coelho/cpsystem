<?php

namespace App\Routes;

class ContatosRoute {

    public static function routes(){
        self::get();
    }

    public static function get(){
        \Route::get('/contatos', 'ContatosController@list');
        \Route::get('/contatos/detail/{id}', 'ContatosController@detail')->where('id', '[0-9]+');
        \Route::get('/contatos/list/{p?}', 'ContatosController@list')->where('p', '[0-9]+');
        \Route::get('/contatos/new', 'ContatosController@new');
    }

}
