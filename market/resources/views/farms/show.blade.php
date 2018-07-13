@extends('layouts.app')
@section('main')

    <div class="panel panel-success">
	
      <div class="panel-heading"><h1 >{{ $farm->name }}</h1></div>
      <strong><div class="panel-body">Location City: {{ $farm->city }}</div></strong>
	  <strong><div class="panel-body">Website: {{ $farm->website }}</div></strong>
      
    <div class="panel panel-success">
    @foreach($farm->markets()->get() as $market)
    
        <label for ='{{ $market }}'>
        <div class="panel-body">{{$market->name}}</div>
        </label>
        
 @endforeach
    </div>
<a type="submit" class="btn btn-primary" href='{{ route('farms.index')}}'>Voltar</a>
<a type="submit" class="btn btn-primary" href='{{ route('farms.edit', $farm)}}'>Editar</a>

@endsection		

