
@extends('layouts.app')
@section('main')

<form action='{{ route('carro.store')}}' method='post' class="form-group">
    {{ csrf_field() }}


    <div class="panel panel-success btn-block">
    <div class="panel-heading"><h1>Cadastro de Veiculo</h1></div> 
    </div>
    
    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>
    <div class="form-group ">
    <lable for='nome'><strong>Nome do Carro</strong> </label>
    <input type='text'  class="form-control" id="nome" name='nome'>
    </div>
    
    <div class="form-group ">
    <lable for='nome'><strong>Ano do Carro</strong> </label>
    <input type='text'  class="form-control" id="ano" name="ano">
    </div>

    <div class="form-group ">
    <lable for='nome'><strong>Kilometragem</strong> </label>
    <input type='text'  class="form-control" id="kmrodado" name='kmrodado'>
    </div>

    <div class="form-group ">
    <lable for='nome'><strong>Preço do Veiculo</strong> </label>
    <input type='text'  class="form-control" id="preco" name='preco'>
    </div><br>

   <button type="submit" class="btn  btn-success btn-block ">Cadastrar</button>

</div>
</div>
</div>
</form>
<a class="btn btn-primary  btn-sm btn-block"href ="{{ route('carro.index')}}">Voltar</a>


    @endsection   