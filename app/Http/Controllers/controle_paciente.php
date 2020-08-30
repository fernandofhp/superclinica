<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pacientes;
use App\Models\cadmedico;
use App\agenda;
use App\User;

class controle_paciente extends Controller
{

    private $Paciente;

    public function __construct(){
        $this->Paciente = new pacientes;
    }

    function index(){
        
    }
    function create(){
        return view('cadpaciente');
    }

    public function store(Request $request){
        $perfil = 'PACIENTE';
        $id_usuario = $request->id_usuario;
        $nome = $request->nome;
        $ender = $request->ender;
        $fone = $request->fone;
        $datanasc = $request->datanasc;
        $cpf_card_nro = $request->cpf_card_nro;

        $paciente = $this->Paciente->create([
            'id_usuario' => $id_usuario,
            'nome' => $nome,
            'ender' => $ender,
            'fone' => $fone,
            'datanasc' => $datanasc,
            'cpf_card_nro' => $cpf_card_nro
        ]);
        $nome = $paciente->nome;
        $vagendas = new agenda;
        $data = date('Y-m-d', time());
        $vagendas = $vagendas->where('data', $data);
        $name = $paciente->relUsers->name; // posso usar model usuarios e o id_usuario  passado
        $password = $paciente->relUsers->password;
        if (!$paciente) { // se medico não foi criado
            return view('cadpaciente'); //retora para a tela de cad. medico
        }        
        return view('agenda', compact('vagendas', 'perfil', 'nome', 'data', 'name', 'password')); 
    }

    function show(){
        
    }
    function edit(){
        
    }
    function update(){
        
    }
    function destroy(){
        
    }
}
    
