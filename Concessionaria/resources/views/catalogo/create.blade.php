@extends('layouts.app')
@section('main')

<form action='{{ route('catalogo.store')}}' method='post' class="form-group">
    {{ csrf_field() }}


    <div class="form-group">
        <lable for='nome'>Nome do Carro</label>
        <input type='text' name='nome'>
   

  
        <lable for='ano' >Ano do Carro</label>
        <input type='text' class="form-control" id="ano" name='ano'>


    <lable for='preco' class="sr-only" >Preço do Carro</label>
    <input type='text' name='preco' class="form-control" id="preco" >
    

    <lable for='kmrodado'>Kilometragem</label>
    <input type='text' name='kmrodado'></input>
    </div>

    <button type='submit'>Cadastrar</button>

</form><br>
<a href ="{{ route('catalogo.index')}}">
    Voltar
</a>

@endsection