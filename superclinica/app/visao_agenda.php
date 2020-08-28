<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades;

class visao_agenda extends Model
{
    protected $connection = 'mysql';
    protected $table='visao_agenda';  
    
    public function handle(){
        \DB::listen(function($sql){
            var_dump($sql->sql);
        });
    }
}
