<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class medicos extends Model
{
    protected $connection = 'mysql';
    protected $table='medicos';
    protected $fillable=['id_usuario', 'nome','especialidade', 'crm']; 
    function relUsers(){
        return $this->hasOne('App\User', 'id', 'id_usuario');
    }
}
