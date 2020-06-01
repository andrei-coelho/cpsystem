@extends('layouts.base')
@section('header-page')
<nav class="nav">
    <li class="nav-item py-2 px-3 mr-2 border-right">
        <img src="/img/contato-icon.svg"> Contatos
    </li>
    <li class="nav-item mx-2">
        <a class="btn btn-primary @if ($subpage == 'list') active @endif" href="/contatos/list">Lista</a>
    </li>
    <li class="nav-item mx-2">
        <a class="btn btn-primary @if ($subpage == 'new') active @endif" href="/contatos/new">Novo Contato</a>
    </li>
</nav>
@endsection

@section('content')
    {!! html_entity_decode($view) !!}
@endsection
