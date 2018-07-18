@extends('layouts.app')
@section('main')




    <div class="panel panel-success">
<div class='panel-heading'><h1>Nenens</h1>	</div>
    </div>
<table class="table table-striped">

			<ul>
				<la><div class="nav nav-pills nav-stacked">
					<a href ="{{ route('vendedor.index')}}"  class="list-group-item fa fa-user">
                       <strong> Vendedores</strong>
					</a>
                    <a <a href ="{{ route('carro.index')}}"  class="list-group-item fa fa-car">
						<strong>Carros</strong>
					</a>
				</div>
				<div>
				<a <a href ="{{ route('cliente.index')}}"  class="list-group-item fa fa-car">
						<strong>Cliente</strong>
					</a>
				</div>
				<a <a href ="{{ route('ano.index')}}"  class="list-group-item fa fa-car">
						<strong>Catalogo</strong>
					</a>
					<a <a href ="{{ route('venda.index')}}"  class="list-group-item fa fa-car">
						<strong>Vendas</strong>
					</a>
				</div>
			</ul>
		 
			
</table>
@endsection
