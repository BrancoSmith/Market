@extends('layouts.app')
@section('main')

<div class="panel panel-success">
	
    <div class="panel-heading"><h1>{{ $vendedor->nome }}</h1></div>

   <div class="panel-body"><strong>Nome:  {{ $vendedor->nome}}</strong></div>
   <div class="panel-body"><strong>Cpf:  {{ $vendedor->cpf}}</strong></div>
   <div class="panel-body"><strong>Telefone:  {{ $vendedor->telefone}}</strong></div>
</div>
<a class="btn btn-warning btn-sm btn-block " href="{{ route('vendedor.edit', $vendedor)}}">Editar</a>
<a class="btn btn-primary  btn-sm btn-block"href ="{{ route('vendedor.index')}}">Voltar</a>
<a href ="{{ route('venda.index')}}"  class="btn btn-primary  btn-sm btn-block">Venda</a>
         

@endsection