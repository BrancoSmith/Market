@extends('layouts.app')
@section('main')

<form action='{{ route('catalogo.store')}}' method='post' class="form-group">
    {{ csrf_field() }}


    <div class="panel panel-success btn-block">
    <div class="panel-heading"><h1>Cadastro de Veiculo</h1></div> 
    </div>
    
    <div class="form-group ">
    <lable for='nome'><strong>Nome do Carro</strong> </label>
    <input type='text'  class="form-control" id="nome" name='nome'>
    </div>
    
    <div class="form-group ">
    <lable for='nome'><strong>Ano do Carro</strong> </label>
    <input type='text'  class="form-control" id="cpf" name='cpf'>
    </div>

    <div class="form-group ">
    <lable for='nome'><strong>Preço do Veiculo</strong> </label>
    <input type='text'  class="form-control" id="preco" name='preco'>
    </div>

    <div class="form-group ">
    <lable for='nome'><strong>Kilometragem</strong> </label>
    <input type='text'  class="form-control" id="km rodado" name='kmrodado'><br>
    </div>

   <button type="submit" class="btn  btn-success btn-block ">Cadastrar</button>
   
</form>
    <button type="submit" class="btn btn-primary btn-block" href ="{{ route('catalogo.index')}}">Voltar</button>


@endsection