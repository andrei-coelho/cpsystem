<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Pages as Pages;

class ContatosController extends Controller implements Pages
{
    public function list($p = 1){
        return $this->show(view("pages.contatos.list"));
    }

    public function show($view){
        return view("pages.contatos.index", [
            'pag'    => 'contatos',
            'view'   => $view
        ]);
    }

    public function getList($p, $limit){
        // retorna uma view da lista
    }
}
