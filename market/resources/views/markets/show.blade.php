@extends('layouts.app')
@section('main')


    <div class="panel panel-success">
	
      <div class="panel-heading"><h1 >{{ $market->name }}</h1></div>
      <strong><div class="panel-body">Location City: {{ $market->city }}</div></strong>
	  <strong><div class="panel-body">Website: {{ $market->website }}</div></strong>

    <div class="panel-heading"><h3>Fazendas Relacionadas </h3></div>
    <div class="panel">
    @foreach($market->farms()->get() as $farm)
        <label for ='{{ $farm }}'>
            
                <div class="panel-body">{{$farm->name}}</div>
             
        </label>
    @endforeach
    
    </div>
<a class="btn btn-success btn-sm btn-block " href="{{ route('markets.edit', $market)}}">Editar</a>
<a  class="btn btn-danger  btn-sm btn-block" href="{{ route('markets.index')}}" >Voltar</a>
@endsection		

