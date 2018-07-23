@extends('layouts.app')
@section('main')
    
    <div class="panel panel-success">
        <div class='panel-heading '><h1>Carros</h1> <a href ="{{ route('carro.create')}}"  class="btn btn-success  btn-sm">
                    Cadastrar
                </a></div>
    </div>

    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
                <div class="w3-container w3-center">
                <table class="table table-striped"> <br>

                     @foreach($carro as $carro)
                         <div class="nav nav-pills nav-stacked">
                            <a href ="{{ route('carro.show', $carro)}}" class="list-group-item">
                                <strong>{{ $carro->nome }}</strong>
                            <a/>
                         </div>
                     @endforeach   
                 </div>
             </div>
         </div><br>

               
                <a href ="{{ route('home.index')}}"  class="btn btn-primary  btn-sm btn-block">
                    Voltar ao inicio
                </a>
                
         
            </table>
                

@endsection

