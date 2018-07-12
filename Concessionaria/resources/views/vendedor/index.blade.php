@extends('layouts.app')
@section('main')
    <ul>
        @foreach($vendedor as $vendedor)
            <li>
                <a href ="{{ route('vendedor.show', $vendedor)}}">
                    {{ $vendedor->nome }}
                </a><br>
                
            </li>


        @endforeach
    </ul>
                <a href ="{{ route('vendedor.create')}}">
                    Cadastrar
                </a><br>
                <a href ="{{ route('home.index')}}">
                    Voltar ao inicio
                </a>

@endsection

