<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Genre;
class genrecontroller extends Controller
{
    

    public function vergenero(){
      $genero=Genre::all();

      return view("Vergenero", compact('genero'));
    }
}
