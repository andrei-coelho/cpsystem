<?php

namespace App\Services;
use App\Config as Config;
use App\Services\ResponseEmail as ResponseEmail;

abstract class Service {

    protected $config;

    public function __construct(){
        $this->config = Config::get();
    }

    abstract public function getEstatisticaEmail($idEmailApi):ResponseEmail;
    abstract protected function access($url, $method);

}
