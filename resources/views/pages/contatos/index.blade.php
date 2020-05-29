@extends('layouts.base')
@section('header-page')
header
@endsection

@section('content')
    {!! html_entity_decode($view) !!}
@endsection
