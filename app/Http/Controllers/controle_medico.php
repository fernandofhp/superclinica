<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Views\cadmedico;
use App\medicos;
use App\agenda;

class controle_medico extends Controller
{
    private $Medico;
    public function __construct(){
        $this->Medico = new medicos;
    }

    public function index(){
        //return view('cadmedico');
    }
    public function create(){
        return view('cadmedico');
    }
    
    public function store(Request $request){
        $perfil = 'MEDICO';
        $id_usuario = $request->id_usuario;
        $nome = $request->nome;
        $especialidade = $request->especialidade;
        $crm = $request->crm;

        $medico = $this->Medico->create([
            'id_usuario' => $id_usuario,
            'nome' => $nome,
            'especialidade' => $especialidade,
            'crm' => $crm
        ]);
        $nome = $medico->nome;
        $vagendas = new agenda;
        $data = date('Y-m-d', time());
        $vagendas = $vagendas->where('data', $data);
        $name = $medico->relUsers->name; // posso usar model usuarios e o id_usuario  passado
        $password = $medico->relUsers->password;
        if (!$medico) { // se medico não foi criado
            return view('cadmedico'); //retora para a tela de cad. medico
        }        
        return view('agenda', compact('vagendas', 'perfil', 'nome', 'data', 'name', 'password')); 
    }

    public function show(){
        
    }
    public function edit(){
        
    }
    public function update(){
        
    }
    public function destroy(){
       
    }
}
