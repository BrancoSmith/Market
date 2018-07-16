@extends('layouts.app')
@section('main')

<form action='{{ route('markets.update', $market)}}' method='post'>

    {{ csrf_field() }}

    <div class="form-group ">
	<label for="name">Market Name</label>
	<input type="text" class="form-control" id="name" placeholder="Nome do Mercado" name="name" value={{$market->name}}>
	</div>

	<div class="form-group">
	<label for="city">Market City</label>
	<input type="text" class="form-control" id="city" name="city" placeholder="Cidade"  value={{$market->city}}>
	</div>

	<div class="form-group">
	<label for="website">Market WebSite</label>
	<input type="text" class="form-control" id="website" name="website" placeholder="https://www.google.com/"  value={{$market->website}}>
	</div>

    {{method_field('patch')}}
    
    @foreach($farms as $id => $farm)
    <div>
    <label for ='{{ $farms }}'>
            <input type='checkbox' name='farms[]' value='{{ $id }}' {{$market->farms()->getRelatedIds()->contains($id) ? 'checked' : ''}}>
            
            {{$farm}}
        </label>
    </div>
    @endforeach

    <button type="submit" class="btn  btn-success" >Edit</button>
	<a type="submit"  class="btn btn-danger " href='{{ route('markets.index')}}'>Cancelar</a>
    </form>
@endsection()