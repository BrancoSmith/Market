@extends('layouts.app')
@section('main')
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial, Helvetica, sans-serif;
}

/* Style the header */
header {
    background-color: black;
    padding: 30px;
    text-align: center;
    font-size: 35px;
    color: white;
}

/* Create two columns/boxes that floats next to each other */
nav {
    float: left;
    width: 30%;
    height: 300px; /* only for demonstration, should be removed */
    background: ;
    padding: 20px;
}

/* Style the list inside the menu */
nav ul {
    list-style-type: none;
    padding: 0;
}

article {
    float: left;
    padding: 20px;
    width: 70%;
    background-color: #f1f1f1;
    height: 300px; /* only for demonstration, should be removed */
}

/* Clear floats after the columns */
section:after {
    content: "";
    display: table;
    clear: both;
}

/* Style the footer */
footer {
    background-color: #777;
    padding: 10px;
    text-align: center;
    color: white;
}

/* Responsive layout - makes the two columns/boxes stack on top of each other instead of next to each other, on small screens */
@media (max-width: 600px) {
    nav, article {
        width: 100%;
        height: auto;
    }
}
</style>



</ul>


<header>
  <h2>Carros</h2>
</header>

<section>
  <nav>
    <ul>
    <ul>
@foreach($catalogo as $catalogo)
<li>
    <a href='{{ route ('catalogo.show', $catalogo)}}'>
        {{$catalogo->nome}}
    </a>

</li>

@endforeach
    </ul>
  </nav>
  
  <article>
    </article>
</section>

<footer>
<a href='{{ route ('catalogo.create')}}'>Cadastrar novo carro</a><br>
<a href='{{ route ('principal.index')}}'>Voltar</a>
</footer>
