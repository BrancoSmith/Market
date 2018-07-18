

@extends('layouts.app')
@section('main')

    <div class="panel panel-success">
	
        <div class="panel-heading">
            <h1>Catalogo  {{ $ano->ano }}</h1> 
        </div>
    </div>
    
    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
                <div class="w3-container w3-center">
                <table class="table table-striped"> <br>
                        @foreach($ano->carros()->get() as $carro)
                            <div class="nav nav-pills nav-stacked">
                                 <a href ="{{ route('carro.show', $carro)}}" class="list-group-item">
                                     <strong>{{ $carro->nome }}</strong>
                                 <a/>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div><br>
        </div>
    </div>
  
<a class="btn btn-success btn-sm btn-block " href="{{ route('ano.edit', $ano)}}">Adicionar Carro</a>
<a class="btn btn-primary  btn-sm btn-block"href ="{{ route('ano.index')}}">Voltar</a>
</table>

@endsection