
@extends('layouts.app')
@section('main')
<form action="{{ route('markets.store') }}" method="post">
	{{ csrf_field() }}
	<div class="form-group ">
	<label for="name">Market Name</label>
	<input type="text" class="form-control" id="name" placeholder="Nome do Mercado" name="name">
	</div>

	<div class="form-group">
	<label for="city">Market City</label>
	<input type="text" class="form-control" id="city" name="city" placeholder="Cidade" >
	</div>

	<div class="form-group">
	<label for="website">Market WebSite</label>
	<input type="text" class="form-control" id="website" name="website" placeholder="https://www.google.com/" >
	</div>
	

	<button type="submit" class="btn  btn-success " >Cadastrar</button>
	<a type="submit"  class="btn btn-danger " href='{{ route('markets.index')}}'>Cancelar</a>
</form>	
@endsection	