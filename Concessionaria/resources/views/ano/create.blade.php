
@extends('layouts.app')
@section('main')

<form action='{{ route('ano.store')}}' method='post' class="form-group">
    {{ csrf_field() }}


    <div class="panel panel-success btn-block">
    <div class="panel-heading"><h1>Novo Catalogo</h1></div> 
    </div>
    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>
        
    <div class="form-group ">
    <lable for='nome'><strong>Ano de Catalogo</strong> </label>
    <input type='text'  class="form-control" id="ano" name='ano'>
    </div>
    
   <button type="submit" class="btn  btn-success btn-block ">Criar Novo</button>
   </div>
   </div>
   </div>
</form>
<a class="btn btn-primary  btn-sm btn-block"href ="{{ route('ano.index')}}">Voltar</a>


    @endsection   