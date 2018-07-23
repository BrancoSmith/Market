@extends('layouts.app')
@section('main')


<div class="panel panel-success">
     <div class='panel-heading '><h1>Venda Nº{{$venda->id}}</h1></div>
</div>
    
    
    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>


                            <div class="panel panel-success btn-block">
                            <div class="panel-heading">
                            <h4>Carro</h4>
                            </div> 
                            <a href ="{{ route('carro.show', $venda->carro->id)}}" class="list-group-item">{{$venda->carro->nome}}</a>
                            </div> 
                            </div>


                            <div class="panel panel-success btn-block">
                            <div class="panel-heading">
                            <h4>Cliente</h4>
                            </div> 
                            <a  href ="{{ route('cliente.show', $venda->cliente->id)}}"class="list-group-item">{{$venda->cliente->nome}}</a>
                            </div>
                            </div>

                            <div class="panel panel-success btn-block">
                            <div class="panel-heading">
                            <h4>Vendedor</h4>
                            </div> 
                            <a  href ="{{ route('vendedor.show', $venda->vendedor->id)}}"class="list-group-item">{{$venda->vendedor->nome}}</a>
                            </div>
                            </div>
                 </div>
             </div>
         </div><br>

                <a href ="{{ route('venda.index')}}"  class="btn btn-primary  btn-sm btn-block">
                    Voltar ao inicio
                </a>
         
                
            </table>

@endsection
