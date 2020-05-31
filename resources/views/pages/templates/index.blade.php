@extends('layouts.base')
@section('header-page')
    <nav class="nav">
    <a class="nav-link active" href="#">Active</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link" href="#">Link</a>
    <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
    </nav>
@endsection

@section('content')
    {!! html_entity_decode($view) !!}
@endsection
