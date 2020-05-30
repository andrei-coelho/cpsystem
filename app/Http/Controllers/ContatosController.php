<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Pages as Pages;
use App\Contato as Contato;

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

    public static function getList(int $limit, $p = 1){
        $scape = abs($p - 1) * $limit;
        $contatos = Contato::skip($scape)->take($limit)->get();
        return view("pages.contatos.list", ['contatos' => $contatos]);
    }
}
