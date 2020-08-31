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
        'data',
        'hora',
        'obs',
        'tipo'        
    ];
    protected $appends = ['data', 'hora','medico','paciente'];

    public function medicos(){
        return $this->hasOne('\App\medicos', 'id', 'id_medico');
    } 
    public function pacientes(){
        return $this->hasOne('\App\pacientes', 'id', 'id_paciente');
    } 

}
