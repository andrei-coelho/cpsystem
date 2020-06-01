<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Pages as Pages;
use App\Template;

class TemplatesController extends Controller implements Pages {

    private static $subpage = "list";

    public function new(){
        self::$subpage = "new";
    }

    public function list(){
        $templates = Template::all();
        return $this->show(view("pages.templates.list", ['templates' => $templates]));
    }

    public function test($file){
        self::$subpage = "test";
        echo file_get_contents(resource_path("templates/".$file.".html"));
    }

    public function show($view){
        return view("pages.templates.index", [
            'subpage' => self::$subpage,
            'pag'    => 'templates',
            'view'   => $view
        ]);
    }

}
