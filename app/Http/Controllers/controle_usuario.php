<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Views\cadusuarios;
use App\Views\acessar;
use App\User;

class controle_usuario extends Controller
{
    private $objUser;
    public function __construct(){
        $this->Usuario = new User;
    }

    public function index(Request $request){
        // usuarios
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
        $email = $request->email;
        $usuario = $this->Usuario->create([
            'name' => $name,
            'password' => $password,
            'email' => $email,
            'email_verified_at' => time()
        ]);
        if (!$usuario) { // se não criou usuario
            return view('cadusuario'); // volta para cadastro usuarios
        }              
        // Prox tela...
        $id_usuario =  $usuario->id;
        if ($pefil == 'MEDICO') {                      
            return view('cadmedico', compact('id_usuario'));            
        }else {            
            return view('cadpaciente', compact('id_usuario'));
        }  
        
        // to-do: ao cancelar (proxima tela) excluir usuario para não sujar db
    }

    public function show(){
        //Listar todos os usuarios 
        //botao administrador no login
    }
    public function destroy(){
        $del = $this->Usuario->destroy($id);        
        //return redirect('usuarios'); 
    }

    public function acessar(Request $request){
        //$perfil = ($request->perfil);
        //return $perfil;
        return view('acessar');
    }
}
