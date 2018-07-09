@extends('layouts.app')
@section('main')

<ul>
<li>
    
<form action="{{ route ('catalogo.store') }}" method ="post">

{{csrf_field()}}

<label for="nome">Nome do Automovel</label>
<input type="text" name="nome"><br><br>

<label for="preco">Preço do Automovel</label>
<input type="number" name="preco"><br>

<button type="submit">Cadastrar Automovél</button>




</form>
    

</li>
@endsection


</ul>