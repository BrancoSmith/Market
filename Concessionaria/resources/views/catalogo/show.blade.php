@extends('layouts.app')
@section('main')


<h1>{{ $catalogo->nome }}</h1>

<ul>
    <li>Nome do Carro:{{ $catalogo->nome}}</li>
    <li>Ano de Fabricação:{{ $catalogo->ano}}</li>
    <li>Preço do Carro:{{ $catalogo->preco}}</li>
    <li>Kilometragem:{{ $catalogo->kmrodado}}</li>
</ul>

<a href ="{{ route('catalogo.index')}}">
    Voltar
</a>


@endsection