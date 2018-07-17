

@extends('layouts.app')
@section('main')

<div class="panel panel-success">
	
    <div class="panel-heading"><h1>Catalogo  {{ $ano->ano }}</h1></div>

</div>
   
<a class="btn btn-success btn-sm btn-block " href="{{ route('ano.edit', $ano)}}">Adicionar Carro</a>
<a class="btn btn-primary  btn-sm btn-block"href ="{{ route('ano.index')}}">Voltar</a>


@endsection