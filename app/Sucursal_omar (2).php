<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Institucion extends Model
{
    //hacemos referencia al tabla que vamos a manejar
    protected $table='institucion_capacitadora';

    
    //se defin ela llave primaria de la tabla institucion
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'version',
    	'direccion_id',
    	'nombre_institucion_capacitadora' 	
    ];

    protected $guarded =[

    ];
}
