@extends('layouts.app')
@section('main')
    <form action="{{ route('venda.store') }}" method="post" class="form-group">
    {{ csrf_field() }}

     <div class="panel panel-success btn-block">
        <div class="panel-heading">
            <h1>Registro de Venda</h1>
         </div> 
     </div>


     <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>
                             
                        <div class="panel panel-info btn-block">
                             <div class="panel-heading">
                                 <h4>Cliente</h4>
                             </div> 
                                @foreach($clientes as $cliente)
                                    <input type='checkbox'  name='cliente_id' value='{{ $cliente->id }}'>{{$cliente->nome}}<br>
                                @endforeach      
                        </div>
    
                        <div class="panel panel-info btn-block ">
                             <div class="panel-heading">
                                 <h4>Car</h4>
                        </div> 
                                @foreach($carros as $carro)
                                    <input type='checkbox' name='carro_id' value='{{ $carro->id }}'>{{$carro->nome}}<br>
                                @endforeach
                        </div>


                        <div class="panel panel-info btn-block">    
                            <div class="panel-heading">
                                <h4>Vendedor</h4>
                        </div>
                                @foreach($vendedors as $vendedor)
                                    <input type='radio' name='vendedor_id' value='{{ $vendedor->id }}'>{{$vendedor->nome}}<br>
                                @endforeach
            </div>            </div> 
         </div> 
     </div> 
      
    
    




    <button class="btn btn-success  btn-sm btn-block">
                Registrar Venda
    </button>

    </form>
    <a href=' {{ route('venda.index')}}'class="btn btn-primary  btn-sm btn-block">
                Voltar
    </a>
    </button>
    </table> 
@endsection 