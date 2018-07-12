@extends('layouts.app')
@section('main')
    <ul>
    <h1>Nenens</h1>
    
        <a href ="{{ route('vendedor.index')}}">
                   Vendedores
        </a><br>
        <a href ="{{ route('catalogo.index')}}">
                   Catalogo de Carros
        </a>
    </ul>
@endsection

