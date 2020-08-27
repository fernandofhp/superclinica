<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Views\cadusuarios;
use App\User;

class controle_usuario extends Controller
{
    function index(){
        return view('cadusuario');
    }
    function login(){
        return view('cadusuario');
    }
}
