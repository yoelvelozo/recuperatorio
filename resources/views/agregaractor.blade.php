@extends('plantilla.plantilla')

@section('contenido')

    <h1>agrega al actor quieras</h1>


    <form class="formu"  method="post">
      @csrf
      <label for="">primer nombre</label><br>
      <input type="text" name="first_name" value="">
      <br>
      <label for="">Apellido</label><br>
      <input type="text" name="last_name" value="">
      <br>
      <label for="">valoracion</label><br>
      <input type="number" name="rating" value=""><br><
      <label for="">Pelicula favorita</label><br>
      <input type="text" name="favorite_movie_id" value=""><br><br>
      <span>esta pelicula no existe</span>
      <button type="submit" name="button">Agregar</button>
      </form>
@endsection
