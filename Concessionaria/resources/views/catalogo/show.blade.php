@extends('layouts.app')
@section('main')

<div class="panel panel-success">
	
    <div class="panel-heading"><h1>{{ $catalogo->nome }}</h1></div>


    <div class="panel-body"><strong>Nome do Carro:  {{ $catalogo->nome}}</strong></div>
    <div class="panel-body"><strong>Ano de Fabricação:  {{ $catalogo->ano}}</strong></div>
    <div class="panel-body"><strong>Preço do Carro:  {{ $catalogo->preco}}</strong></div>
    <div class="panel-body"><strong>Kilometragem:  {{ $catalogo->kmrodado}}</strong></div>

</div>
<a class="btn btn-success btn-sm btn-block " href="#">Vender</a>
<a class="btn btn-warning btn-sm btn-block " href="{{ route('catalogo.edit', $catalogo)}}">Editar</a>
<a class="btn btn-primary  btn-sm btn-block"href ="{{ route('catalogo.index')}}">Voltar</a>



@endsection