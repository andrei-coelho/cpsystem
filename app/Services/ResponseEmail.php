<?php

namespace App\Services;

use App\Config as Config;

class ResponseEmail {

    public $enviados, $lidos, $erros, $nl, $status, $response;

    public function __construct(int $enviados, int $lidos, int $nl, int $erros, int $status, bool $response = true){
        $this->enviados = $enviados;
        $this->lidos = $lidos;
        $this->nl = $nl;
        $this->erros = $erros;
        $this->status = $status;
        $this->response = $response;
    }



}
