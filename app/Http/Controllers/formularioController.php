<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Usuario;
use Illuminate\Support\Facades\Hash;

class formularioController extends Controller
{
  public function insertar(Request $result){


     $valida = [
       'nomu' => "required|max:100",
       'fecha' => "required|DATE",
       'email' => "required|max:100",
       'gene' => "required|numeric|min:0",
       'clave' => "required",
       'foto' => "file"
      ];


      $msj = [
        "required" => "el campo :attribute es requerido",
        "numeric" => "este campo :attribute solo puede contener número",
        "min" => "el valor :attribute debe ser mayor",
        "max"  => "el valor :attribute ingresado supera el permitido",
        "date" => "el campo :attribute debe tener una fecha correcta",
        "file" => "Seleccione una imagen"
      ];

      $this->validate($result, $valida, $msj);

        //subir imagen
       $ruta = $result->file("foto")->store("public");
       $nombre = basename($ruta);

  $clave =  Hash::make($result->clave);
       //agregamos ususario
      $nuevo = new Usuario();

      $nuevo->nomu = $result["nomu"];
      $nuevo->fecha = $result["fecha"];
      $nuevo->email = $result["email"];
      $nuevo->genero = $result["gene"];
      $nuevo->clave = $clave;
      $nuevo->foto = $nombre;

       $nuevo->save();

       return view("index");

  }
}
