@extends('layouts.app')
@section('main')
    
<div class="panel panel-success">
        <div class='panel-heading '><h1>Vendas</h1> <a class="btn btn-success btn-sm  " href="{{ route('venda.create')}}">
                    Registrar Venda
                </a></div>
    </div>

    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
                <div class="w3-container w3-center">
                    <table class="table table-striped"> <br>
                         @foreach($vendas as $venda)
                             <div class="nav nav-pills nav-stacked">
                                 <a href="{{route('venda.show', $venda)}}" class="list-group-item"><strong>Nº{{$venda->id}}</strong></a> 
                             </div>
                         @endforeach<br>     
                 </div>     
         </div>
     </div>
 </div>

              
             
                <a href ="{{ route('home.index')}}"  class="btn btn-primary  btn-sm btn-block">
                    Voltar ao inicio
                </a>
         
            </table>

@endsection

