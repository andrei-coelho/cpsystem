<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Pages as Pages;
use App\EmailServiceFactory as Factory;
use App\Email as Email;
use App\Config as Config;

class EmailsController extends Controller implements Pages
{
    public function list($p = 1){
        return $this->show($this->getList($p, 8));
    }

    public function show($view){
        return view("pages.emails.index", [
            'pag'    => 'emails',
            'view'   => $view
        ]);
    }

    public function getList($p, $limit){
        // retorna uma view da lista
        return view("pages.emails.list");
    }

    public static function getLastInView(){

        $api = Factory::create(Config::get());
        $email = Email::first();
        $obj = $api->getEstatisticaEmail($email->id_email_banch);
        $res = $obj->Response->Data;
        $status = $obj->Response->Status;
        if($status == 1){
            $email->setEstatisticas(
                $res->Sent,
                $res->Opens,
                $res->Bounces,
                $res->UnOpens,
                $res->Status
            );
        } else {
            $email->apiStatus = false;
        }

        return view("pages.emails.list", ['emails' => [$email]]);
    }
}
