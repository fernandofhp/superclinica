<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Views\cadusuarios;
use App\Views\acessar;
use App\User;

class controle_usuario extends Controller
{
    function index(Request $request){
        $perfil = verifica($request->perfil, 'PACIENTE');
        //return $perfil;
        return view('cadusuario', compact('perfil'));
    }

    function acessar(Request $request){
        //$perfil = ($request->perfil);
        //return $perfil;
        return view('acessar');
    }
}
