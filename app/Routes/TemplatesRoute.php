<?php

namespace App\Routes;

class TemplatesRoute implements Route {

    public static function routes(){
        self::get();
    }

    public static function get(){
        \Route::get('/templates', 'TemplatesController@list');
        \Route::get('/templates/test/{file}', 'TemplatesController@test');
        \Route::get('/templates/new', 'TemplatesController@new');
    }

}
