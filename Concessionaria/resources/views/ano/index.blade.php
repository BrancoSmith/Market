@extends('layouts.app')
@section('main')
    
    <div class="panel panel-success">
        <div class='panel-heading '><h1>Catalogos</h1> <a href ="{{ route('ano.create')}}"  class="btn btn-success  btn-sm ">
                    Novo Catalogo
                </a></div>
    </div>

    <div class="w3-container">
        <div class="w3-card-4" style="width:100%">
                <div class="w3-container w3-center">
                <table class="table table-striped"> <br>

                     @foreach($ano as $ano)
                         <div class="nav nav-pills nav-stacked">
                            <a  href="{{ route('ano.show', $ano)}}" class="list-group-item">
                                <strong>{{ $ano->ano }}</strong>
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

