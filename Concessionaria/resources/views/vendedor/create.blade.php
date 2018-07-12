@extends('layouts.app')
@section('main')

<form action='{{ route('vendedor.store')}}' method='post'>
    {{ csrf_field() }}

    <lable for='nome'>Nome </label>
    <input type='text' name='nome'>

    <lable for='cpf'>Cpf</label>
    <input type='text' name='cpf'>

    <lable for='telefone'>Telefone</label>
    <input type='text' name='telefone'>


    <button type='submit'>Cadastrar</button>

</form><br>
<a href ="{{ route('vendedor.index')}}">
    Voltar
</a>

@endsection