@extends('layouts.app')
@section('main')


<h1>{{ $vendedor->nome }}</h1>

<ul>
    <li>Nome:{{ $vendedor->nome}}</li>
    <li>Cpf :{{ $vendedor->cpf}}</li>
    <li>Telefone :{{ $vendedor->telefone}}</li>
</ul>

<a href ="{{ route('vendedor.index')}}">
    Voltar
</a>


@endsection