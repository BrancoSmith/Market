
@extends('layouts.app')
@section('main')

<form action='{{ route('ano.update', $ano)}}' method='post' class="form-group">
    {{method_field('patch')}}       
    {{ csrf_field() }}


    <div class="panel panel-success btn-block">
    <div class="panel-heading"><h1>Carros</h1></div> 
    </div>

    
    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>

    @foreach($carros as $id => $carro)
    <div>
    <label for ='{{ $carros }}'>
            <input type='checkbox' name='carros[]' value='{{ $id }}'{{$ano->carros()->allRelatedIds()->contains($id) ? 'checked' : ''}}>
            
            {{$carro}}
        </label>
    </div>
    @endforeach


    <button type="submit" class="btn  btn-success btn-block ">Criar Novo</button>
    </div>
    </div>
    </div>
</form>
    <a class="btn btn-primary  btn-sm btn-block"href ="{{ route('ano.index')}}">Voltar</a>


    @endsection   