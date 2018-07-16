@extends('layouts.app')
@section('main')


    <div class="panel panel-success">
<div class='panel-heading'><h1>Nenens</h1>	</div>
    </div>
<table class="table table-striped">

			
				<div class="nav nav-pills nav-stacked">
					<a href ="{{ route('vendedor.index')}}"  class="list-group-item fa fa-user">
                       <strong> Vendedores</strong>
					</a>
                    <a <a href ="{{ route('catalogo.index')}}"  class="list-group-item fa fa-car">
						<strong> Catalogo de Carros</strong>
					</a>
				</div>
                <div></div>

		 
			
</table>
@endsection
