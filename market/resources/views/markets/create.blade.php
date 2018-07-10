@extends('layouts.app')
@section('main')


<form action='{{route('markets.store')}}' method="post">


{{csrf_field()}}
    

    <label for="name">Market Nome</label>
    <input type="text" name="name">

    <label for="city">Location</label>
    <input type="text" name="city">

    <label for="website">Website</label>
    <input type="text" name="website">

    <button type="submit">Cadastrar</button>
    
    </form>
    <a href='{{ route('markets.index')}}'>voltar</a>