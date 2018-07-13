
@extends('layouts.app')
@section('main')
<form action='{{ route('farms.store', $farm)}}' method='post'>
{{method_field('patch')}}
    
    @foreach($markets as $id =>$market)
    <div>
        <label for ='{{ $market }}'>
            <input type='checkbox' name='markets[]' value='{{ $id }}' {{$farm->markets()->getRelatedIds()->contains($id) ? 'checked' : ''}}>
            
            {{$market}}
        </label>
    </div>
 @endforeach
	{{ csrf_field() }}
	<div class="form-group ">
	<label for="name">Farm Name</label>
	<input type="text" class="form-control" id="name" placeholder="Nome do Mercado" name="name">
	</div>

	<div class="form-group">
	<label for="city">Farm City</label>
	<input type="text" class="form-control" id="city" name="city" placeholder="Cidade" >
	</div>

	<div class="form-group">
	<label for="website">Farm WebSite</label>
	<input type="text" class="form-control" id="website" name="website" placeholder="https://www.google.com/" >
	</div>

	<button type="submit" class="btn  btn-success " >Cadastrar</button>
	<a type="submit"  class="btn btn-danger " href='{{ route('farms.index')}}'>Cancelar</a>
</form>	
@endsection	