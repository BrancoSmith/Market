@extends('layouts.app')
@section('main')
   


   <form action='{{ route('carro.update', $carro)}}' method='post' class="form-group">
    {{ csrf_field() }}
    
    <div class="panel panel-success btn-block">
    <div class="panel-heading"><h1>Editar Dados do Carro</h1></div> 
    </div>

    <div class="w3-container">
     <div class="w3-card-4" style="width:100%">
    <div class="w3-container w3-center">
    <table class="table table-striped"> <br>

    <div class="form-group ">
    <lable for='nome'>Nome do Carro</label>
    <input type='text' class="form-control" id="nome" name='nome' value="{{$carro->nome}}">
    </div>

    <div class="form-group ">
    <lable for='ano' >Ano do Carro</label>
    <input type='text'class="form-control" id="ano" name='ano' value="{{$carro->ano}}">
    </div>
    
    <div class="form-group ">  
    <lable for='preco' >Preço do Carro</label>
    <input type='text'class="form-control" id="preco" name='preco' value="{{$carro->preco}}" >
    </div>
    
    <div class="form-group ">
    <lable for='kmrodado'>Kilometragem</label>
    <input type='text' class="form-control" id="kmrodado" name='kmrodado' value="{{$carro->kmrodado}}">
    </div>
  
  <h2>Catalogos</h2>
    {{method_field('patch')}}
    @foreach($anos as $id => $ano)
        <div>
            <label for='{{ $ano }}'>
                <input type='checkbox' name='anos[]' value='{{ $id }}' {{$carro->anos()->allRelatedIds()->contains($id) ? 'checked' : ''}}>
                {{ $ano }}
            </label>
        </div>
    @endforeach



  <button type="submit" class="btn  btn-warning btn-block ">Editar</button>
  </div>
  </div>
  </div>

</form>
<a type="submit" class="btn btn-primary btn-block" href ="{{ route('carro.index')}}">Voltar</a>


@endsection
