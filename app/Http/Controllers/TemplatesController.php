<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Pages as Pages;

class TemplatesController extends Controller implements Pages {

    public function new(){

    }

    public function list(){
        return $this->show('oiee');
    }

    public function test($file){
        echo file_get_contents(resource_path("templates/".$file.".html"));
    }

    public function show($view){
        return view("pages.templates.index", [
            'pag'    => 'templates',
            'view'   => $view
        ]);
    }

}
