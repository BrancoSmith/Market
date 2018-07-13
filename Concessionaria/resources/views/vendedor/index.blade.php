@extends('layouts.app')
@section('main')
    <ol>
        @foreach($vendedor as $vendedor)
            <li>
                <a href ="{{ route('vendedor.show', $vendedor)}}">
                    {{ $vendedor->nome }}
                </a><br>
                
            </li>


        @endforeach
    </ol>
                <a href ="{{ route('vendedor.create')}}">
                    Cadastrar
                </a><br>
                <a href ="{{ route('home.index')}}">
                    Voltar ao inicio
                </a>

@endsection

