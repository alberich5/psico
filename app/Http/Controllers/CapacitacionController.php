<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\Dependencia;
use App\Institucion;

class CapacitacionController extends Controller
{

    public function home(){
    	$mensaje="Omar zarate";

    	return view('capacitacion.plantillacapacitacion',compact($mensaje));
    	//return "Estas dentro del controlador";
    }
    //Traer la informacio de Deoendencia
     public function dependencia()
    {
        $dependencia = Dependencia::orderBy('direccion_id', 'DESC')->get();

        return$dependencia;
    }
    //Traer la informacio de institucion
     public function institucion()
    {
        $institucion = Institucion::orderBy('direccion_id', 'DESC')->get();
        return $institucion;
    }


    public function agenda()
    {
          $dependencia = Dependencia::all();
           $institucion = Institucion::all();


         return view('capacitacion.agenda',["dependencia"=>$dependencia,"institucion"=>$institucion]);
    }
}
