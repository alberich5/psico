<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use App\elemento_policial;
use App\Persona_fisica;
use App\Dato_personal;
use App\Sucursal;
use App\Sucursal_historico;


class PsicologiaController extends Controller
{


    public function home(){

    	return view('Psicologia.plantillaPsicologia');
    }

    public function captura(){

    	return view('Psicologia.curso.captura');
    }
     public function lista(){

    	return view('Psicologia.curso.lista');
    }

    //Traer la informacio de Delegacion
     public function sucursal()
    {
        $sucursal = Sucursal::select('id','nombre')->get();

        return$sucursal;
    }

    //Traer la informacion de los elementos disponibles
    public function buscarElementos()
    {

    	$elemento = elemento_policial::where('elemento_policial_reingreso_id')->take(50)->get();
        $sucursal = Sucursal::orderBy('id', 'DESC')->take(5)->get();
        $dato = Dato_personal::orderBy('id', 'DESC')->take(1)->get();
        //dd($elemento);
        return $sucursal;
    }
}
