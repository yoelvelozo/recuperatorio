<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;
class moviecontroller extends Controller
{


    public function verpelicula(){
      $pelicula=Movie::all();

      return view("Verpelicula", compact('pelicula'));
    }

      public function infoPeli($id){
  $peliculaElegida = Movie::find($id);
  return view ('pelicula', compact('peliculaElegida'));

    }
public function selecionar($id){
$peliculaElegida = Movie::find($id);
return view ('peliedit', compact('peliculaElegida'));

}



    public function editaR(Request $datos){
        $validacion=[
          "title"=>"required|max:100",
          "rating"=>"required|numeric",
          "awards"=>"required|numeric",
          "length"=>"required|numeric",
          "genre_id"=>"required|min:7"
        ];
        $mensaje=[
          "required"=>" el campo :attribute es requerido",
          "numeric"=>"el campo :attribute solo acepta numeros",
          "min"=>"el campo :attribute debe superar los 7 caracteres"
        ];
    $this->validate($datos,$validacion,$mensaje);
        $pelieditada=Movie::find($datos->id);

      $pelieditada->title=$datos["title"];
      $pelieditada->rating=$datos["rating"];
      $pelieditada->awards=$datos["awards"];
      $pelieditada->length=$datos["length"];
      $pelieditada->genre_id=$datos["genre_id"];

     $pelieditada->save();
     return view('pelicula');
    }
}
