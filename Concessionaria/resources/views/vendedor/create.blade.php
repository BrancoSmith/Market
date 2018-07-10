@extends('layouts.app')
@section('main')


    
<form action='{{ route ('vendedor.store') }}' method ="post">

{{csrf_field()}}

<label for="nome">Nome do Vendedor</label>
<input type="text" name="nome"><br><br>

<label for="cpf">Cpf </label>
<input type="number" name="cpf"><br>

<label for="telefone">Numero para Contato</label>
<input type="number" name="telefone"><br>

<button type="submit">Cadastrar Vendedor</button>




</form>
    
<a href='{{ route ('vendedor.index')}}'>Voltar</a>

@endsection


