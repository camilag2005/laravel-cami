<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CamilaController extends Controller
{
    //
    public function Guardar(Resquest $_request){
        $usuario = new CamilaController;
        $usuario->name = $_request-> name;
        $usuario->apellido = $_request-> apellido;
        $usuario->correo = $_request-> correo;
        $usuario->doctor = $_request-> doctor;
        $usuario->servicio = $_request-> servicio;
        $usuario->fecha_y_hora = $_request-> fecha_y_hora;

      //  $CamilaController->();
        // usuario = usuario::all();
        return view("formulario");
 }
    
}
