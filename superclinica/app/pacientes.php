<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pacientes extends Model
{
    protected $connection = 'mysql';
    protected $table='pacientes';
    protected $fillable=['id_usuario', 'nome','ender', 'fone', 'cpf_card_nro', 'datanasc']; 
    function relUsers(){
        return $this->hasMany('App\User', 'id', 'id_usuario');
    }
}
