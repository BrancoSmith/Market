@extends('layouts.app')
@section('main')
	
    <div class="panel panel-success">
<div class='panel-heading'><h1>Mercados do Mundo</h1>	</div>
    </div>
<table class="table table-striped">

			
				<div class="nav nav-pills nav-stacked">
					<a href="{{ route('markets.index') }}" class="list-group-item">
                       <strong> Mercados</strong>
					</a>
                    <a href="{{ route('farms.index') }}" class="list-group-item">
						<strong> Fazendas</strong>
					</a>
				</div>

		 
			
</table>
		


		@endsection	


		