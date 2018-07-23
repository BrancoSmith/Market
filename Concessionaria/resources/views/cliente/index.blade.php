@extends('layouts.app')
@section('main')


<div class="panel panel-success">
<div class='panel-heading '><h1>Clientes</h1> <a href ="{{ route('cliente.create')}}"  class="btn btn-success  btn-sm">
                    Cadastrar
                </a></div>
    </div>
    
    
    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
                <div class="w3-container w3-center">
                <table class="table table-striped"> <br>

                    @foreach($cliente as $cliente)
                        <div class="nav nav-pills nav-stacked">
                            <a href ="{{ route('cliente.show', $cliente)}}" class="list-group-item"><strong>{{ $cliente->nome}}</strong></a>
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




		 
