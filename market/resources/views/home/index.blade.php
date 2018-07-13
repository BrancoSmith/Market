@extends('layouts.app')
@section('main')
	
    <div class="panel panel-success">
<div class='panel-heading'>Mercados do Mundo</div>
    </div>
<table class="table table-striped">

			
				<div class="nav nav-pills nav-stacked">
					<a href="{{ route('markets.index') }}" class="list-group-item">
                        Mercados
					</a>
                    <a href="{{ route('farms.index') }}" class="list-group-item">
                        Fazendas
					</a>
				</div>

		 
			
</table>
		


		@endsection	


		