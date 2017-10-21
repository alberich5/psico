<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal extends Model
{
     //hacemos referencia al tabla que vamos a manejar
    protected $table='sucursal';

    
    //se defin ela llave primaria de la tabla sucursal
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'version',
    	'dato_fiscal_id',
    	'nombre_sucursal',
    	'sucursal_depende_id',
    	'encargado_delegacion_id',
    	'nombre_largo_sucursal',
    	'numero_nomina',
    	'email' 	
    ];
    protected $guarded =[

    ];
}
