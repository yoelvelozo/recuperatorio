@extends('plantilla.plantilla')

@section('contenido')


    <h1>actores</h1>
<div class="conteactor">

    @foreach ($actores as $id => $actor)
      <ul>
         <a href="/infoactores/{{$actor->id}}">
        <li class="actores">{{$actor->first_name}}</li></a>
      </ul>
    @endforeach
</div>

@endsection
