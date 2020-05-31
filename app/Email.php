<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Services\ResponseEmail as ResponseEmail;

class Email extends Model {

    public $responseApi;
    public $apiStatus = true;

    public function setEstatisticas(ResponseEmail $response){
        $this->responseApi = $response;
    }

}
