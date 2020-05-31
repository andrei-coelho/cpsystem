<?php

namespace App\Services;
use App\Services\Service as Service;

class BenchMarke extends Service {

    const URL_BASE = "https://clientapi.benchmarkemail.com/";

    public function getEstatisticaEmail($idEmailApi):ResponseEmail{

        $json = $this->access("Emails/".$idEmailApi."/Report", "GET");
        $status = $json->Response->Status;

        if($status != 1)
        return new ResponseEmail(0,0,0,0,0,false);

        $res = $json->Response->Data;
        return new ResponseEmail(
            $res->Sent,
            $res->Opens,
            $res->Bounces,
            $res->UnOpens,
            $res->Status
        );
    }

    protected function access($url, $method){

        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $this::URL_BASE.$url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_ENCODING => "",
            CURLOPT_MAXREDIRS => 10,
            CURLOPT_TIMEOUT => 0,
            CURLOPT_FOLLOWLOCATION => true,
            CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
            CURLOPT_CUSTOMREQUEST => $method,
            CURLOPT_HTTPHEADER => array(
                "AuthToken: ".$this->config->chave,
                "Content-Type: application/json"
            )
        ));

        $response = curl_exec($curl);
        curl_close($curl);
        return \json_decode($response);

    }

}
