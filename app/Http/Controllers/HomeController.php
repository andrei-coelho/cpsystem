<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {

        $emailView = EmailsController::getLastInView();
        $contatoView = ContatosController::getList(3);
        return view('pages.home', ['pag' => 'home', 'emailView' =>  $emailView, 'contatoView' => $contatoView]);

    }
}
