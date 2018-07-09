@extends('layouts.app')
@section('main')
<h1>{{$catalogo->nome}}<h1>

<ul>
<li>Preco: {{$catalogo->preco}}</li>
</ul>

@endsection