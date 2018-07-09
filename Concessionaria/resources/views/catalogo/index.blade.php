@extends('layouts.app')
@section('main')
<ul>
@foreach($catalogo as $catalogo)
<li>
    <a href='{{ route ('catalogo.show', $catalogo)}}'>
        {{$catalogo->nome}}
    </a>

</li>

@endforeach

<a href='{{ route ('catalogo.create')}}'>Cadastrar novo carro</a>
</ul>