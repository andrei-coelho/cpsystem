<?php

namespace App;
use App\Services\BenchMarke as BenchMarke;

class EmailServiceFactory {

    public static function create(ConfigEmpresa $conf){
        switch($conf->empresa_service){
            case "BenchMarke": return new BenchMarke($conf);
        }

    }

}
