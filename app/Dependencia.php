<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dependencia extends Model
{
    //hacemos referencia al tabla que vamos a manejar
    protected $table='dependencia_responsable';

    
    //se defin ela llave primaria de la tabla dependencia
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'version',
    	'direccion_id',
    	'nombre_dependencia' 	
    ];
    protected $guarded =[

    ];
}
