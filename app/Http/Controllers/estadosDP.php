<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Route;

class estadosDP extends Controller
{

  

    //
  function verEstado (Request $request)
    {
      $rango = $request->input('nivel');
      if($rango >=-1.00 && $rango <-0.75)
      {
        $resA = "triste";
        return view ('resultadoAnimo',['resA'=> $resA]);
      }
      else if($rango >=-0.75 && $rango <0.75)
      {
        $resA = "normal";
        return view ('resultadoAnimo',['resA'=> $resA]);
      }
      else if($rango >0.75 && $rango <=1.00)
      {
        $resA = "feliz";
        return view ('resultadoAnimo',['resA'=> $resA]);
      }
      else
      {
        $resA = "ingrese en el rango de -1.00 a 1.00";
        return view ('resultadoAnimo',['resA'=> $resA]);
      }
      
  }
}
