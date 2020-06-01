<?php

namespace App\Services;
use App\Services\Service as Service;

class BenchMarke extends Service {

    const URL_BASE = "https://clientapi.benchmarkemail.com/";

    protected $dicionario = [
        "[nome]" => "[contact_attribute:firstname]",
        "[sobrenome]" => "[contact_attribute:last name]",
        "[email]" => "[contact_attribute:email]",
        "[empresa]" => "[contact_attribute:company name]"
    ];

    public function getEstatisticaEmail($idEmailApi):ResponseEmail{

        $json = $this->access("Emails/".$idEmailApi."/Report", "GET");

        if(!isset($json->Response->Status) || $json->Response->Status != 1)
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
