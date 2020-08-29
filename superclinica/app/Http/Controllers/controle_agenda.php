<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
//use App\visao_agenda; // Model  app\visao_agenda.php
use App\agenda; // Model  app\visao_agenda.php
use App\User; // Model  tabela de usuarios
use App\medicos; // Model  tabela de usuarios
use App\pacientes; // Model  tabela de usuarios

class controle_agenda extends Controller{

    private $agenda_;
    private $vis_agenda;
    private $Usuario;
    private $Medicos;
    private $Paciente;

    public function __construct(){
        $this->agenda_ = new agenda; //Modelo = tabela
       // $this->vis_agenda = new visao_agenda; //Modelo = tabela
        $this->Usuario = new User; //Modelo = tabela
        $this->Medicos = new medicos; //Modelo = tabela
        $this->Pacientes = new pacientes; //Modelo = tabela
    }

    

    public function vagenda(){
        return view('visagenda');
    }
    public function cadagenda(){
        return view('cadagenda');
    }
    public function testagenda(Request $request){        
        $perfil = $request->perfil;  
        $name = $request->name;
        $pass = $request->password;        
        $data = $request->data;        
        $usuario1 = $this->Usuario->where('name', $name)->get()
            ->where('password', $pass)->first();
        //$id_u = $usuario1->first();

        $id_u = $usuario1->id;
        if ($perfil == 'MEDICO') {
            $medico = $this->Medicos->where('id_usuario','=',$id_u);        
            $id_medico = $medico->id;  
            $nome = $medico->nome;
            $vagendas = $this->agenda_;                 
        
            $vagendas = $vagendas->where('id_medico',$id_medico); //
            $vagendas = $vagendas->whereData('2020-08-25')->get();  // $data
            //$listPacientes = $vagendas->pacientes; 
            //$listMedicos = [];              
            //$listPacientes = [];              
        }

        if ($perfil == 'PACIENTE') {
            $paciente = $this->Pacientes->where('id_usuario','=',$id_u);        
            $id_paciente = $paciente->id;  
            $nome = $paciente->nome;
            $vagendas = $this->agenda_;           
        
            $vagendas = $vagendas->whereIdPaciente($id_paciente); //
            $vagendas = $vagendas->whereData('2020-08-25')->get();  // $data 
            //$listMedicos = $vagenda->medicos;  
            //$listMedicos = [];
            //$listPacientes = [];
        }         
        //return dd($vagendas);  , 'listPacientes', 'listMedicos'
                      
        return view('testagenda', compact('vagendas', 'perfil', 'nome'));
    }
}
