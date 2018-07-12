@extends('layouts.app')
@section('main')

<form action='{{ route('catalogo.store')}}' method='post'>
    {{ csrf_field() }}

    <lable for='nome'>Nome do Carro</label>
    <input type='text' name='nome'>

    <lable for='ano'>Ano do Carro</label>
    <input type='text' name='ano'>

    <lable for='preco'>Preço do Carro</label>
    <input type='text' name='preco'>

    <lable for='kmrodado'>Kilometragem</label>
    <input type='text' name='kmrodado'></input>

    <button type='submit'>Cadastrar</button>

</form><br>
<a href ="{{ route('catalogo.index')}}">
    Voltar
</a>

@endsection