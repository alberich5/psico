<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sucursal_historico extends Model
{
    //hacemos referencia al tabla que vamos a manejar
    protected $table='sucursal_historico';

    
    //se defin ela llave primaria de la tabla sucursal_historico
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'version',
    	'activo',
    	'comentario_cambio',
    	'elemento_policial_id',
    	'fecha_cambio',
    	'fecha_registro',
    	'fecha_update',
    	'sucursal_id',
    	'usuario_actualiza_id',
    	'usuario_registra_id',
    	'cambio_temporal',
    	'fecha_inicio_cambio_temporal',
    	'fecha_reincopororacion_cambio_temporal',
    	'fecha_termino_cambio_temporal',
    	'sucursal_reincorporacion_id',
    	'fecha_reincorporacion_cambio_temporal',
    	'oficio'	
    ];
    protected $guarded =[

    ];
}
