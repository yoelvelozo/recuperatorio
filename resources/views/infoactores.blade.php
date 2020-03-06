
@extends('plantilla.plantilla')

@section('contenido')

    <h1>Actores</h1>
    <ul>
  <li>{{$actores->first_name}}</li>
  <li>{{$actores->last_name}}</li>
  <li>{{$actores->rating}}</li>
  @foreach ($actores->movies as $mov )
  <li>{{$mov->title}}</li>
  @endforeach
</ul>


  @endsection
