@extends('layouts.app')
@section('main')

    <div class="panel panel-success">
	
      <div class="panel-heading"><h1 >{{ $market->name }}</h1></div>
      <strong><div class="panel-body">Location City: {{ $market->city }}</div></strong>
	  <strong><div class="panel-body">Website: {{ $market->website }}</div></strong>
	
    </div>
<a type="submit" class="btn btn-primary" href='{{ route('markets.index')}}'>Voltar</a>
@endsection		

