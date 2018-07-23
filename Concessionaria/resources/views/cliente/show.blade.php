@extends('layouts.app')
@section('main')

<div class="panel panel-success">
	
    <div class="panel-heading"><h1>{{ $cliente->nome }}</h1></div>

   <div class="panel-body"><strong>Nome:  {{ $cliente->nome}}</strong></div>
   <div class="panel-body"><strong>Cpf:  {{ $cliente->cpf}}</strong></div>
   <div class="panel-body"><strong>Telefone:  {{ $cliente->telefone}}</strong></div>

   <h4>Compras Realizadas</h4>
     @foreach($cliente->vendas()->get() as $venda)
        <label for ='{{ $venda }}'>
                <a href={{ route('venda.show', $venda->id)}}"><div class="panel-body">Nº{{$venda->id}}</div></a>
                
        </label>
           
    @endforeach


</div>
<a class="btn btn-warning btn-sm btn-block " href="{{ route('cliente.edit', $cliente)}}">Editar</a>
<a class="btn btn-primary  btn-sm btn-block"href ="{{ route('cliente.index')}}">Voltar</a>


@endsection