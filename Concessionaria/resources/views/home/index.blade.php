@extends('layouts.app')
@section('main')
    <ul>
    <h1>Nenens</h1>
     
        <a href ="{{ route('vendedor.index')}}" class='fa fa-user'>
                   Vendedores
        </a><br>
        <a href ="{{ route('catalogo.index')}}" class='fa fa-car'>
                   Catalogo de Carros
        </a>
    </ul>
@endsection

