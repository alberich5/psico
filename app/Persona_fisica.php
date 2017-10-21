<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Persona_fisica extends Model
{
    ///hacemos referencia al tabla que vamos a manejar
    protected $table='persona_fisica';

    
    //se defin ela llave primaria de la tabla persona fisica
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'activo',
    	'adscripcion_id',
    	'dato_personal_id',
    	'desarrollo_academico_id',
    	'disciplina_policial_id',
    	'estudio_socio_economico_id',
    	'fecha_alta',
    	'documentacion_oficial_fiscal_id' 	
    ];
    protected $guarded =[


    ];
}
