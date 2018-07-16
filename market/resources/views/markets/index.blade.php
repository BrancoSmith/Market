@extends('layouts.app')
@section('main')
	

	<div class="panel panel-success">
		<div class="panel-heading "><h1 >Mercados Do Mundo</h1></div></div>
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
<a href="{{ route('home.index') }}"  class="btn btn-danger  btn-sm btn-block">Voltar</a>
<div  class="btn  btn-sm btn-block">{{ $markets->links() }}</div>
		@endsection	


		