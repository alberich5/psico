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

    public function prueba(){

     return view('Psicologia.curso.prueba');
   }

    //Traer la informacio de Delegacion
     public function sucursal()
    {
        $sucursal = Sucursal::select('id','nombre')->get();

        return$sucursal;
    }


    //buscar elementosEncontrados
    public function searchUsuario(Request $request)
    {


        if($request['usuario']['id']!='')
{
$usuario=DB::select("select distinct
elementos_policiales.id as id_elemento,
elementos_policiales.estatus,
elementos_policiales.nombre,
elementos_policiales.apellido_paterno,
elementos_policiales.apellido_materno,
elementos_policiales.fecha_inicio_laboral,
elementos_policiales.fecha_nacimiento,
elementos_policiales.sub_delegacion

from elementos_policiales

where
elementos_policiales.id=".$request['usuario']['id']." and elementos_policiales.activo='SI'
and elementos_policiales.estatus in ('Candidato Historico','Candidato Contratado')

");
}
else
{
$usuario=DB::select("select distinct
elementos_policiales.id as id_elemento,
elementos_policiales.estatus,
elementos_policiales.nombre,
elementos_policiales.apellido_paterno,
elementos_policiales.apellido_materno,
elementos_policiales.fecha_inicio_laboral,
elementos_policiales.fecha_nacimiento,
elementos_policiales.sub_delegacion

from elementos_policiales

where

 elementos_policiales.rfc like '%".strtoupper($request['usuario']['rfc'])."%'
and elementos_policiales.nombre like '%".strtoupper($request['usuario']['nombre'])."%'
and elementos_policiales.apellido_paterno like '%".strtoupper($request['usuario']['paterno'])."%'
and elementos_policiales.apellido_materno like '%".strtoupper($request['usuario']['materno'])."%'
and elementos_policiales.activo='SI'
and elementos_policiales.estatus in ('Candidato Historico','Candidato Contratado')
");
}//fin else

//permisos


$informacion=array();
$informacion['usuario']=$usuario;
//$informacion['permisos']=$permisos;
dd($informacion);
    return $informacion;
  }


    //funcion para traer los elemenos disponibles de la base de datos
    public function buscarElementos()
    {

    	//$elemento = elemento_policial::where('elemento_policial_reingreso_id')->take(50)->get();
      $delegacion = "Tuxtepec";
      //$elemento= elemento_policial::select('id','version')->take(10)->get();
      $elemento = elemento_policial::join("persona_fisica","elemento_policial.id_persona_fisica","=","persona_fisica.id")
      ->join("dato_personal","elemento_policial.id","=","dato_personal.id")
      ->join("sucursal_historico","persona_fisica.id_dato_personal","=","sucursal_historico.id_elemento_policial")
      ->join("sucursal","sucursal_historico.id_sucursal","=","sucursal.id")
      ->select('elemento_policial.id','elemento_policial.status','dato_personal.nombre','dato_personal.apellido_paterno','dato_personal.apellido_materno','sucursal.nombre as delegacion','dato_personal.rfc','dato_personal.curp')
      ->where('sucursal_historico.version','=', 0)
      //->where('elemento_policial.status','in', 'Candidato Contratado')
      ->where('sucursal.nombre','=', $delegacion)
      ->orderBy('id', 'ASC')->limit(15)->get();

      //dd($elemento[12]->status);
        $enviar=$elemento->toJson();
      $texto=str_replace('"','',$enviar);



$usuarios=DB::select("select distinct
elementos_policiales.id as id_elemento,
elementos_policiales.estatus,
elementos_policiales.nombre,
elementos_policiales.apellido_paterno,
elementos_policiales.apellido_materno,
elementos_policiales.fecha_inicio_laboral,
elementos_policiales.fecha_nacimiento,
elementos_policiales.sub_delegacion

from elementos_policiales
inner join permiso on elementos_policiales.id=permiso.elemento_policial_id
where permiso.tipo='vacaciones' and elementos_policiales.activo='SI'
and elementos_policiales.estatus in ('Candidato Historico','Candidato Contratado')

");
dd($usuarios);

        return $usuarios;
    }
}
