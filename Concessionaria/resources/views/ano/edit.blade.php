
@extends('layouts.app')
@section('main')

<form action='{{ route('ano.update', $ano)}}' method='post' class="form-group">
    {{method_field('patch')}}       
    {{ csrf_field() }}

    @foreach($carros as $id => $carro)
    <div>
    <label for ='{{ $carros }}'>
            <input type='checkbox' name='carros[]' value='{{ $id }}'{{$ano->carros()->allRelatedIds()->contains($id) ? 'checked' : ''}}>
            
            {{$carro}}
        </label>
    </div>
    @endforeach


    <button type="submit" class="btn  btn-success btn-block ">Criar Novo</button>
</form>
    <a class="btn btn-primary  btn-sm btn-block"href ="{{ route('ano.index')}}">Voltar</a>


    @endsection   