@extends('layouts.app')
@section('main')


<div class="panel panel-success">
     <div class='panel-heading '><h1>Vendas Nº</h1></div>
</div>
    
    
    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
            <div class="w3-container w3-center">
                <table class="table table-striped"> <br>

                    {{method_field('patch')}}
                     @foreach($clientes->clientes()->get() as $cliente)
                            <div class="nav nav-pills nav-stacked">
                                 <a href ="{{ route('cliente.show', $cliente)}}" class="list-group-item">
                                     {{ $cliente->nome }}
                                 </a>
                            </div>
                     @endforeach


                 </div>
             </div>
         </div><br>

                <a href ="{{ route('venda.index')}}"  class="btn btn-primary  btn-sm btn-block">
                    Voltar ao inicio
                </a>
         
            </table>

@endsection
