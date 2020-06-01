<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Pages as Pages;
use App\Contato as Contato;

class ContatosController extends Controller implements Pages {

    private static $subpage = "list";

    public function list($p = 1, $search = false){
        if($search) return $this->show(self::getSearchList($search, $p));
        return $this->show(self::getList($p));
    }

    public function new(){
        self::$subpage = "new";
        return $this->show(view("pages.contatos.form-new"));
    }

    public function save(Request $request){

        $request->flash();
        $contato = new Contato();
        $contato->nome = $request->nome;
        $contato->sobrenome = $request->sobrenome;
        $contato->empresa = $request->empresa;
        $contato->email = $request->email;
        $contato->telefone = $request->telefone;
        $contato->status = 1;

        try {
            $contato->save();
            return redirect('/contatos/list')->with('success', 'Contato foi salvo com sucesso');
        } catch(\Illuminate\Database\QueryException $e){

            if($e->getCode() == 23000)
                return redirect('/contatos/new')->with('error', 'Este email já está cadastrado');
            else
                return redirect('/contatos/new')->with('error', 'Não possível salvar o contato. Erro: '.$e->code);

        } catch(\Exception $e){
            //return redirect('/contatos/new')->with('error', 'Houve um problema no servidor e não foi possível salvar o contato.');
        }

    }

    public function show($view){
        return view("pages.contatos.index", [
            'subpage' => self::$subpage,
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
