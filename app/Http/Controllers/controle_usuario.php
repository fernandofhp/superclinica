<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Views\cadusuarios;
use App\Views\acessar;
use App\User;

class controle_usuario extends Controller
{
    public function index(Request $request){
        //Listar todos os usuarios 
        //botao administrador no login
    }

    public function create(Request $request){ 
        $perfil = verifica($request->perfil, 'PACIENTE');
        $name = ''; //$request->name'';
        $password = '';
        //return $perfil;
        return view('cadusuario', compact('perfil', 'name', 'password'));
    } 

    public function store(Request $request){
        $pefil = $request->perfil;
        //gravar usuario antes de continuar
        $name = $request->name;
        $password = $request->password;

        // Prox tela...
        if ($pefil == 'MEDICO') {
            return view('cadmedico');
        }else {
            return view('cadpaciente');
        }  
        
        // to-do: ao cancelar (proxima tela) excluir usuario para não sujar db
    }

    public function destroy(){

    }

    public function acessar(Request $request){
        //$perfil = ($request->perfil);
        //return $perfil;
        return view('acessar');
    }
}
