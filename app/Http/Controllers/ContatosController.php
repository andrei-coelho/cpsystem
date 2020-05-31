<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Pages as Pages;
use App\Contato as Contato;

class ContatosController extends Controller implements Pages {

    public function list($p = 1, $search = false){
        if($search) return $this->show(self::getSearchList($search, $p));
        return $this->show(self::getList($p));
    }

    public function show($view){
        return view("pages.contatos.index", [
            'pag'    => 'contatos',
            'view'   => $view
        ]);
    }

    public static function getSearchList($search, int $p = 1, int $limit = 12){

        $scape = abs($p - 1) * $limit;

        $contatos = Contato::where('nome', 'like', "%{$search}%")
        ->orWhere('sobrenome', 'like', "%{$search}%")
        ->orWhere('email', 'like', "%{$search}%")
        ->skip($scape)
        ->take($limit)
        ->get();

        return view("pages.contatos.list", ['contatos' => $contatos, 'search' => $search]);

    }

    public static function getList(int $p = 1, int $limit = 12){
        $scape = abs($p - 1) * $limit;
        $contatos = Contato::skip($scape)->take($limit)->orderBy('id', 'DESC')->get();
        return view("pages.contatos.list", ['contatos' => $contatos]);
    }
}
