@extends('plantilla.plantilla')

@section('contenido')

<h1>pelicula Elegida</h1>


<ul>
  <li>Titulo: {{$peliculaElegida->title}}</li>
  <li>Rating: {{$peliculaElegida->rating}}</li>
  <li>Premios:  {{$peliculaElegida->awards}}</li>
  <li>Duracion:  {{$peliculaElegida->length}}</li>
  <li>Actores: @foreach ($peliculaElegida->actor as $actores => $act)
    <li>{{$act->first_name}}</li>
  @endforeach
  <li>Genero:  {{$peliculaElegida->genre->name}}</li>
</ul>

<a href="/editar/{{$peliculaElegida->id}}">Editar</a>

@endsection
