<?php

namespace App\Services;
use App\Config as Config;
use App\Services\ResponseEmail as ResponseEmail;

abstract class Service {

    protected $config;

    /**
     * ATENÇÂO
     * defina a constante dicionario
     * na classe filha
     * para alteração de tags
     * exemplo:

     protected $dicionario = [
         "[nome]" => "{tag_utilizada_pelo_servico_de_terceiro}",
         "[sobrenome]" => "{tag_utilizada_pelo_servico_de_terceiro}",
         "[email]" => "{tag_utilizada_pelo_servico_de_terceiro}",
         "[empresa]" => "{tag_utilizada_pelo_servico_de_terceiro}"
     ];

     */

    protected $dicionario = [
         "[nome]" => "",
         "[sobrenome]" => "",
         "[email]" => "",
         "[empresa]" => ""
     ];

    public function __construct(){
        $this->config = Config::get();
    }

    public function getDicionario() {
        return $this->dicionario;
    }

    abstract public function getEstatisticaEmail($idEmailApi):ResponseEmail;
    abstract protected function access($url, $method);

}
