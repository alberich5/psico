<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class capacitacion_historica extends Model
{
    //hacemos referencia al tabla que vamos a manejar
    protected $table='capacitacion_historica';

    
    //se defin ela llave primaria de la tabla capacitacion historica
    protected $primaryKey='id';

    public $timestamps=false;

    protected $fillable =[
    	'version',
    	'archivo_cuip_digital',
    	'comentario',
    	'elemento_policial_id',
    	'fecha_inicio',
    	'fecha_registro',
    	'fecha_termino',
    	'fecha_update',
    	'nombre_archivo_digital',
    	'nombre_curso_capacitacion_id',
    	'tipo_archivo_digital',
    	'usuario_actualiza_id',
    	'usuario_registra_id',
    	'horas_curso',
    	'impartio',
    	'archivo',
    	'nombre_archivo',
    	'tipo_archivo',
    ];
    protected $guarded =[

    ];
}
}
