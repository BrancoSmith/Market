@extends('layouts.app')
@section('main')

<div class="panel panel-success">
	
    <div class="panel-heading"><h1>{{ $carro->nome }}</h1></div>


    <div class="panel-body"><strong>Nome do Carro:  {{ $carro->nome}}</strong></div>
    <div class="panel-body"><strong>Ano de Fabricação:  {{ $carro->ano}}</strong></div>
    <div class="panel-body"><strong>Preço do Carro:  {{ $carro->preco}}</strong></div>
    <div class="panel-body"><strong>Kilometragem:  {{ $carro->kmrodado}}</strong></div>

</div>
<a class="btn btn-success btn-sm btn-block " href="#">Vender</a>
<a class="btn btn-warning btn-sm btn-block " href="{{ route('carro.edit', $carro)}}">Editar</a>
<a class="btn btn-primary  btn-sm btn-block"href ="{{ route('carro.index')}}">Voltar</a>



@endsection