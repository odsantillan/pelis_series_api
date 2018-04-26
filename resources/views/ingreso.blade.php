@extends('layouts.master')

@section('title', 'Ingreso')

@section('content')
  <form method="POST" action="/resultadoAnimo">
    @csrf
    <p>Ingrese</p>
   
    
    
    <input type="text" name="nivel"><br>
    

    <input type="submit" value="Aceptar" >


  </form> 
@stop