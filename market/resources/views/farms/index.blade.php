@extends('layouts.app')
@section('main')
	

<table class="table table-striped">

			@foreach($farms as $farm)
				<div class="nav nav-pills nav-stacked">
					<a href="{{ route('farms.show', $farm) }}" class="list-group-item">
					{{ $farm->name }} 
					</a>
				</div>
			@endforeach
			
</table>


<a class="btn btn-success btn-sm btn-block " href="{{ route('farms.create') }}">Cadastrar</a>
<a href="{{ route('home.index') }}"  class="btn btn-danger  btn-sm btn-block">Voltar</a>
<div  class="btn btn-default btn-xs btn-block">{{ $farms->links() }}</div>
		@endsection	


		