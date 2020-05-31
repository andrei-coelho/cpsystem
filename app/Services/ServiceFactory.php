<?php

namespace App\Services;

use App\Services\BenchMarke as BenchMarke;
use App\Config as Config;

class ServiceFactory {

    public static function create(){

        $conf = Config::get();

        switch($conf->empresa_service){
            case "BenchMarke": return new BenchMarke($conf);
        }

    }

}
