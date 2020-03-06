@extends('plantilla.plantilla')

@section('contenido')
  <form action="pelieditada" method="post">
    @csrf
    <label for="">Titulo</label>
    <input type="text" name="title" value="">
    <br>
    <label for="">Rating</label>
    <input type="number" name="rating" value="">
    <br>
    <label for="">Premios</label>
    <input type="number" name="awards" value="">
    <br>
    <label for="">Duracion</label>
    <input type="number" name="length" value="">
    <br>
    <label for="">Genero</label>
    <input type="text" name="genre_id" value=""><br>
    <button type="submit" name="button">Editar</button>
  </form>

@endsection
