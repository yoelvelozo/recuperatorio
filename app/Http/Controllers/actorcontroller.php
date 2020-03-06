<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Actor;
class actorcontroller extends Controller
{

    public function veractores(){
      $actores=Actor::all();

      return view("Veractores", compact('actores'));
    }

    public function infoactor($id){
      $actores = Actor::find($id);

      return view('infoactores', compact('actores'));

    }
    public function agregar(Request $datos){
      $validacion=[
        "first_name"=>"required|max:50",
        "last_name"=>"required|max:50",
        "rating"=>"required|numeric"
      ];
      $mensajes=[
        "required"=>"el campo :attribute",
        "max"=>"el campo :attribute supero el maximo permitido",
        "numeric"=>"el campo solo acepta numeros"
      ];
      $this->validate($datos,$validacion,$mensajes);

      $actornuevo=new Actor;

      $actornuevo->first_name=$datos["first_name"];
      $actornuevo->last_name=$datos["last_name"];
      $actornuevo->rating=$datos["rating"];

      $actornuevo->save();
      return redirect("mostrar");
    }
}
