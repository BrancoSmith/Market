<!DOCTYPE html>
<html>
<body>
@extends('layouts.app')
@section('main')

<ul>
    @foreach($markets as $markets)
        <li>
            <a href="{{ route('markets.show', $markets)}}">
             {{$markets->name}}
             </a>
        
        </li>

    @endforeach
    <a href="{{ route('markets.create', $markets)}}">Cadastrar
</ul>

</body>
</html>