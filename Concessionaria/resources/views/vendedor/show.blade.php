@extends('layouts.app')
@section('main')

<h2>{{$vendedor->nome}}</h2>

<ul>

    <li>Cpf do Vendedor: {{$vendedor->cpf}}</li>
    <li>Telefone para Contato:{{$vendedor->telefone}} </li>

<a href='{{ route ('vendedor.index')}}'>Voltar</a>
</ul>


@endsection
