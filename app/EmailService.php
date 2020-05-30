<?php

namespace App;

abstract class EmailService {

    protected $config;

    public function __construct(ConfigEmpresa $conf){
        $this->config = $conf;
    }

    abstract protected function access($url, $method);

}
