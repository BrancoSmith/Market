@extends('layouts.app')
@section('main')

<form action='{{ route('farms.update', $farm)}}' method='post'>


    {{ csrf_field() }}
	<div class="form-group ">
	<label for="name">Farm Name</label>
	<input type="text" class="form-control" id="name" placeholder="Nome do Mercado" name="name" value="{{$farm->name}}">
	</div>

	<div class="form-group">
	<label for="city">Farm City</label>
	<input type="text" class="form-control" id="city" name="city" placeholder="Cidade" value="{{$farm->city}}">
	</div>

	<div class="form-group">
	<label for="website">Farm WebSite</label>
	<input type="text" class="form-control" id="website" name="website" placeholder="https://www.google.com/" value="{{$farm->website}}" >
	</div>

	{{method_field('patch')}}
    
    @foreach($markets as $id =>$market)
    <div>
        <label for ='{{ $market }}'>
            <input type='checkbox' name='markets[]' value='{{ $id }}' {{$farm->markets()->getRelatedIds()->contains($id) ? 'checked' : ''}}>
            
            {{$market}}
        </label>
    </div>
 @endforeach
 

 <button type="submit" class="btn  btn-success " >Edit</button>
 <a type="submit"  class="btn btn-danger " href='{{ route('farms.index')}}'>Cancelar</a>


</form>

@endsection()