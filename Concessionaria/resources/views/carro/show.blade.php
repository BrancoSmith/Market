@extends('layouts.app')
@section('main')

<div class="panel panel-success">
	
    <div class="panel-heading"><h1>{{ $carro->nome }}</h1></div>


    <div class="panel-body"><strong>Nome do Carro:  {{ $carro->nome}}</strong></div>
    <div class="panel-body"><strong>Ano de Fabricação:  {{ $carro->ano}}</strong></div>
    <div class="panel-body"><strong>Preço do Carro:  {{ $carro->preco}}</strong></div>
    <div class="panel-body"><strong>Kilometragem:  {{ $carro->kmrodado}}</strong></div>

     <h4>Catalgos relacionados</h4>
      @foreach($carro->anos()->get() as $ano)
        <label for ='{{ $ano }}'>
        <a href={{ route('ano.show', $ano->id)}}"> <div class="panel-body">{{$ano->ano}}</div></a>     
        </label>
     @endforeach

    <h4>Vendas Relacionadas</h4>
     @foreach($carro->vendas()->get() as $venda)
        <label for ='{{ $venda }}'>
                <a href={{ route('venda.show', $venda->id)}}"><div class="panel-body">Nº{{$venda->id}}</div></a>
        </label>
    @endforeach

</div>

<a class="btn btn-warning btn-sm btn-block " href="{{ route('carro.edit', $carro)}}">Editar</a>
<a class="btn btn-primary  btn-sm btn-block"href ="{{ route('carro.index')}}">Voltar</a>
         


@endsection