@extends('layouts.app')
@section('main')
    <ol>
        @foreach($catalogo as $catalogo)
            <li>
                <a href ="{{ route('catalogo.show', $catalogo)}}">
                    {{ $catalogo->nome }}
                </a><br>
                
            </li>


        @endforeach
    </ol>
                <a href ="{{ route('catalogo.create')}}">
                    Cadastrar
                </a><br>
                <a href ="{{ route('home.index')}}">
                    Voltar ao Inicio
                </a>
                

@endsection

