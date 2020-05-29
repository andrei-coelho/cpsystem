<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Pages as Pages;

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
}
