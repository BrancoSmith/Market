@extends('layouts.app')
@section('main')


<form action="{{route('markets.store')}}" method="post">
{{csrf_field()}}
    <imput type="hidden" name="_token" value="DaBSErIR...WPPI">

    <label for="name">Market Name</label>
    <input type="text" name="name">

    <label for="city">Location</label>
    <input type="text" name="city">

    <label for="website">Website</label>
    <input type="text" name="website">

    <button type="submit">Create</button>
    
    </form>