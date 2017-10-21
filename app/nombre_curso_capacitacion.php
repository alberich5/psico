<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nombre_curso_capacitacion extends Model
{
    //hacemos referencia al tabla que vamos a manejar
    protected $table='nombre_curso_capacitacion';

    
    //se defin ela llave primaria de la tabla nombre de curso de capacitacion
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'version',
    	'nombre_curso_capacitacion' 	
    ];
    protected $guarded =[

    ];
}
