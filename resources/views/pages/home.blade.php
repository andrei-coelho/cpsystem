@extends('layouts.base')

@section('header-page')
<nav class="nav">
    <li class="nav-item py-2 px-3 mr-2 border-right">
        <img src="/img/home-icon.svg"> Home
    </li>
    <li class="nav-item mx-2">
        <a class="btn btn-primary" href="#">Novo Email</a>
    </li>
    <li class="nav-item mx-2">
        <a class="btn btn-primary" href="#">Novo Contato</a>
    </li>
</nav>
@endsection

@section('content')

    <div class="container-fluid">
        <div class="row">

            <div class="col-12 pt-4">
                <p><img src="/img/email-icon.svg" alt=""> Último Email Enviado:</p>
            </div>
            <div class="col-12">

                <!-- email container -->
                {!! html_entity_decode($emailView) !!}
            </div>
        </div>
    </div>


    <div class="container-fluid">
        <div class="row">

            <div class="col-12 pt-4">
                <p><img src="/img/contato-icon.svg" alt=""> Últimos Contatos Adicionados:</p>
            </div>

            {!! html_entity_decode($contatoView) !!}

        </div>
    </div>

@endsection
