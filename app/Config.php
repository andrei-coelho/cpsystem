<?php

namespace App;

use App\ConfigEmpresa as ConfigEmpresa;

class Config {

    private static $configObj = false;

    private function __construct(){}

    public static function get(){
        if(!self::$configObj){
            self::$configObj = ConfigEmpresa::first();
        }
        return self::$configObj;
    }

}
