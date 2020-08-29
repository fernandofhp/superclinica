<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Views\cadusuarios;
use App\Views\acessar;
use App\User;

class controle_usuario extends Controller
{
    function index(){
        return view('cadusuario');
    }
    function acessar(){
        return view('acessar');
    }
}
