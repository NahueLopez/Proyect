@extends('adminlte::page')

@section('title', 'Stokeate-Admin')

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('content_header')
    <h1>Dashboard</h1>
@stop

@section('content')
    <p>Bienvenido {{ auth()->user()->name }} al Home de {{ auth()->user()->empresary}}</p>
@stop



@section('js')
    <script> console.log('Hi!'); </script>
@stop