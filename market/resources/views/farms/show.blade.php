@extends('layouts.app')
@section('main')

    <div class="panel panel-success">
	
      <div class="panel-heading"><h1 >{{ $farm->name }}</h1></div>
      <strong><div class="panel-body">Location City: {{ $farm->city }}</div></strong>
	  <strong><div class="panel-body">Website: {{ $farm->website }}</div></strong>
      
      <div class="panel-heading"><h3>Serviços com Mercados </h3></div>
    <div class="panel">
    @foreach($farm->markets()->get() as $market)
        <label for ='{{ $market }}'>
            
                <div class="panel-body">{{$market->name}}</div>
             
        </label>
    @endforeach
    </div>


<a class="btn btn-success btn-sm btn-block " href="{{ route('farms.edit', $farm)}}">Editar</a>
<a href="{{ route('farms.index')}}"  class="btn btn-danger  btn-sm btn-block">Voltar</a>
@endsection		

