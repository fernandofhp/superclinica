<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class agenda extends Model
{
    protected $connection = 'mysql';
    protected $table='agenda';
    protected $fillable=[
        'id_medico',
        'id_paciente',
        'datahora',
        'obs',
        'tipo'        
    ];
    protected $appends = ['data', 'hora','medico','paciente'];

}
