@extends('layouts.app')
@section('main')

<ul>
@foreach($catalogo as @catalogo)
<li>
    <a href="{{ route('vendedor.show', $catalogo)}}">
        {{ $catalogo->nome}}
    </a>

</li>
@endsection
<a href="{{ route('vendedor.create')}}">Cadastrar</a>


</ul>