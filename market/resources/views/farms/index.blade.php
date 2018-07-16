@extends('layouts.app')
@section('main')
	

<div class="panel panel-success">
		<div class="panel-heading "><h1 >Fazendas Do Mundo</h1></div></div>
<table class="table table-striped">

			@foreach($farms as $farm)
				<div class="nav nav-pills nav-stacked">
					<a href="{{ route('farms.show', $farm) }}" class="list-group-item">
						<strong>{{ $farm->name }}</strong> 
					</a>
				</div>
			@endforeach
			
</table>


<a class="btn btn-success btn-sm btn-block " href="{{ route('farms.create') }}">Cadastrar</a>
<a href="{{ route('home.index') }}"  class="btn btn-danger  btn-sm btn-block">Voltar</a>
<div  class="btn  btn-sm btn-block">{{ $farms->links() }}</div>
		@endsection	


		