<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Usuario;


class indexController extends Controller
{
  public function logear(Request $result){

      $user = Usuario::where("nomu", "=" , $result->nomu);

      if ($user){

        $clave = Hash::make($result->clave);

      if ($clave == $user->clave){
        return view('home');
      }else{
      $msj = "usuario o contraseña incorrecta";
      $vac=compact('msj');
      return view('index' , $vac);
}
}
}
}
