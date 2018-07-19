<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>NeNens</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<!--<div class="container">
<nav class="navbar navbar-default ">
  <div class="container-fluid">
    <div class="navbar-header">
      <a class="navbar-brand" href="{{ route('home.index')}}">Nenes</a>
    </div>
    <ul class="nav navbar-nav">
      <li ><a href="{{ route('ano.index')}}"  class="fa fa-car">Catalogo</a></li>
      <li><a href="{{ route('carro.index')}}"  class=" fa fa-car">Carros</a></li>
      <li><a href="{{ route('vendedor.index')}}"  class="glyphicon glyphicon-user">Vendedores</a></li>
      <li><a  href ="{{ route('cliente.index')}}"  class="glyphicon glyphicon-user">Clientes</a></li>
      <li><a href="{{ route('venda.index')}}"  class="glyphicon glyphicon-usd">Vendas</a></li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
    </ul>
  </div>
</nav>-->



<div id="topheader">
  <nav class="navbar navbar-default">
		<div class="container-fluid">
			 <div class="navbar-header">
				  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
				  </button>
				  <a class="navbar-brand"  href="{{ route('home.index')}}" >NeNes</a>
			 </div>
			 <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-nav">
						<li><a href="{{ route('vendedor.index')}}"  class="glyphicon glyphicon-user">Vendedores</a></li>
						<li><a href ="{{ route('cliente.index')}}"  class="glyphicon glyphicon-user">Cliente</a></li>
						<li><a href="{{ route('ano.index')}}"  class="fa fa-car">Catalogo</a></li>
						<li><a href="{{ route('carro.index')}}"  class=" fa fa-car">Carros</a></li>
						<li><a href="{{ route('venda.index')}}"  class="glyphicon glyphicon-usd">Vendas</a></li>
				  </ul>
				  <ul class="nav navbar-nav navbar-right">
						<li><a href="#"  class="glyphicon glyphicon-user">Login</a></li>
				  </ul>
			 </div>
		</div>
  </nav>
</div>
    @yield('main')
    @if(count($errors) > 0) 
			@foreach ($errors->all() as $error)
			<div class="alert alert-danger" role="alert">{{ $error }}</div>
			@endforeach
	@endif	
</body>
</html>