@extends('layouts.app')
@section('main')
   


   <form action='{{ route('carro.update', $carro)}}' method='post' class="form-group">
    {{method_field('patch')}}
    {{ csrf_field() }}
 

    <div class="panel panel-success btn-block">
    <div class="panel-heading"><h1>Editar Dados do Carro</h1></div> 
    </div>


    <div class="form-group ">
    <lable for='nome'>Nome do Carro</label>
    <input type='text' class="form-control" id="nome" name='nome' value="{{$carro->nome}}">
    </div>

    <div class="form-group ">
    <lable for='ano' >Ano do Carro</label>
    <input type='text'class="form-control" id="ano" name='ano' value="{{$carro->ano}}">
    </div>
    
    <div class="form-group ">  
    <lable for='preco' >Preço do Carro</label>
    <input type='text'class="form-control" id="preco" name='preco' value="{{$carro->preco}}" >
    </div>
    
    <div class="form-group ">
    <lable for='kmrodado'>Kilometragem</label>
    <input type='text' class="form-control" id="kmrodado" name='kmrodado' value="{{$carro->kmrodado}}">
    </div>

   <button type="submit" class="btn  btn-warning btn-block ">Editar</button>
   

</form>
<a type="submit" class="btn btn-primary btn-block" href ="{{ route('carro.index')}}">Voltar</a>


@endsection
