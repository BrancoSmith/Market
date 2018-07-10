@extends('layouts.app')
@section('main')

<ul>
@foreach($vendedor as $vendedor)

<li>
    <a href='{{ route('vendedor.show', $vendedor)}}'>
        {{ $vendedor->nome}}
    </a>

</li>
@endforeach

<a href='{{ route ('vendedor.create')}}'>Cadastrar</a><br>
<a href='{{ route ('principal.index')}}'>Voltar</a>


</ul>
@endsection