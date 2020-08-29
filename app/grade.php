<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class grade extends Model
{
    protected $connection = 'mysql';
    protected $table='grade';
    protected $fillable=['grade'];
}
