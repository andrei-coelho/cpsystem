<?php

namespace App\Services;

use App\Config as Config;

class ResponseEmail {

    public $sent, $opens, $bounces, $unopens, $status, $response;

    public function __construct(int $sent, int $opens, int $unopens, int $bounces, int $status, bool $responce = true){
        $this->sent = $sent;
        $this->opens = $opens;
        $this->unopens = $unopens;
        $this->bounces = $bounces;
        $this->status = $status;
        $this->responce = $responce;
    }



}
