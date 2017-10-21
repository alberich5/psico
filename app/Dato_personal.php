<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dato_personal extends Model
{
    //hacemos referencia al tabla que vamos a manejar
    protected $table='dato_personal';

    
    //se defin ela llave primaria de la tabla dato personal
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'version',
    	'apellido_materno',
    	'apellido_paterno',
    	'archivo',
    	'ciudad_nacimiento_id',
    	'curp',
    	'distintiva_homonimia',
    	'entidad_nacimiento_id',
    	'estado_civil',
    	'fecha_nacimiento',
    	'fecha_naturalizacion',
    	'genero',
    	'imss',
    	'modo_nacionalidad',
    	'municipio_nacimiento_id',
    	'nacionalidad_id',
    	'nombre',
    	'nombre_archivo',
    	'ocupacion',
    	'pais_nacimiento_id',
    	'rfc',
    	'tipo',
    	'alergia',
    	'tipo_sangre'	
    ];
    protected $guarded =[

    ];
}
