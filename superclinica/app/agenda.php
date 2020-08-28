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
/*
    public function getDataAttribute(){  
        $data = $this->datahora;
        return date("Y-m-d", strtotime($data));
    }

    public function getHoraAttribute(){         
        $hora = $this->datahora;
        return date("H:i", strtotime($hora));       
    }
*/
    public function getMedicoAttribute(){
        return $this->hasOne('App\medicos', 'id_medico');
    }
    public function getPacienteAttribute(){
        return $this->hasOne('App\pacientes', 'id_paciente');
    }
}
