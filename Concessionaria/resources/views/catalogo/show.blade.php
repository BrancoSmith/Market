@extends('layouts.app')
@section('main')
<h2>{{$catalogo->nome}}</h2>

<ul>
<li>Preco: {{$catalogo->preco}}</li>
</ul>
<a href='{{ route ('catalogo.index')}}'>Voltar</a>
@endsection