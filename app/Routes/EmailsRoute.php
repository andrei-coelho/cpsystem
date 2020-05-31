<?php

namespace App\Routes;

class EmailsRoute implements Route {

    public static function routes(){
        self::get();
    }

    public static function get(){
        \Route::get('/emails', 'EmailsController@list');
        \Route::get('/emails/detail/{id}', 'EmailsController@detail')->where('id', '[0-9]+');
        \Route::get('/emails/list/{p?}', 'EmailsController@list')->where('p', '[0-9]+');
        \Route::get('/emails/campanhas', 'EmailsController@campanhas');
        \Route::get('/emails/new', 'EmailsController@new');
    }

}
