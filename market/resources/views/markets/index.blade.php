@extends('layouts.app')
@section('main')
	

<table class="table table-striped">

			@foreach($markets as $market)
				<div class="nav nav-pills nav-stacked">
					<a href="{{ route('markets.show', $market) }}" class="list-group-item">
					{{ $market->name }} 
					</a>
				</div>
			@endforeach
			
</table>
		

<a class="btn btn-success btn-sm btn-block " href="{{ route('markets.create') }}">Cadastrar</a>
<div  class="btn btn-default btn-xs btn-block">{{ $markets->links() }}</div>
		@endsection	


		