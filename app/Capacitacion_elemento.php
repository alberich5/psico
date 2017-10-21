<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Capacitacion_elemento extends Model
{
    //hacemos referencia al tabla que vamos a manejar
    protected $table='capacitacion_elemento_policial';

    
    //se defin ela llave primaria de la tabla capacitacion elemento
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'version',
    	'activo',
    	'agenda_capacitacion_id',
    	'comentario_baja', 	
    	'eficiencia_terminal',
    	'elemento_policial_id',
    	'fecha_baja',
    	'fecha_registro',
    	'fecha_update',
    	'horas_asistidas',
    	'modo_curso',
    	'usuario_actualiza_id',
    	'usuario_baja_id',
    	'usuario_registra_id',
    	'archivo',
    	'nombre_archivo',
    	'tipo',


    ];
    protected $guarded =[

    ];
}
