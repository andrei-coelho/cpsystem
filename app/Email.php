<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Email extends Model {

    public $enviados, $lidos, $erros, $nl, $status;
    public $apiStatus = true;

    public function setEstatisticas($enviados, $lidos, $erros, $nl, $status){
        $this->enviados = $enviados;
        $this->lidos = $lidos;
        $this->erros = $erros;
        $this->nl = $nl;
        $this->status = $status;
    }

}
