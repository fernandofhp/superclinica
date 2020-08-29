<?php

namespace App\Http\Controllers;

use App\campo;
use Illuminate\Http\Request;
//use App\visao_agenda; // Model  app\visao_agenda.php
use App\agenda; // Model  app\visao_agenda.php
use App\User; // Model  tabela de usuarios
use App\medicos; // Model  tabela de usuarios
use App\pacientes; // Model  tabela de usuarios

class controle_agenda extends Controller{

    private $agenda_;
    private $Usuario;
    private $Medicos;
    private $Paciente;

    public function __construct(){
        $this->agenda_ = new agenda; //Modelo = tabela
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
               
        $perfil = campo::verifica($request->perfil, 'PACIENTE');  
        $name = campo::verifica($request->name);
        $pass = campo::verifica($request->password);        
        $data = campo::verifica($request->data, '2020-08-25');   
             
        $usuario1 = $this->Usuario->where('name', $name)->get()
            ->where('password', $pass)->first();
        //$id_u = $usuario1->first();
        $id_u = campo::verifica($usuario1->id);
       
        if ($perfil == 'MEDICO') {
            $medico = $this->Medicos->where('id_usuario','=',$id_u)->get();        
            $id_medico = campo::verifica($medico->id, -1);  
            $nome = campo::verifica($medico->nome);
            $vagendas = $this->agenda_;                 
        
            //$vagendas = $vagendas->where('id_medico',$id_medico); //
            $vagendas = $vagendas->whereData('2020-08-25')->get();  // $data
            //$listPacientes = $vagendas->pacientes; 
            //$listMedicos = [];              
            //$listPacientes = [];              
        }

        if ($perfil == 'PACIENTE') {
            $paciente = $this->Pacientes->where('id_usuario','=',$id_u)->get();                             
            $id_paciente = campo::verifica($paciente->id,-1);              
            $nome = campo::verifica($paciente->nome);
            $vagendas = $this->agenda_;           
         
            //$vagendas = $vagendas->whereIdPaciente($id_paciente); //
            $vagendas = $vagendas->whereData('2020-08-25')->get();  // $data 
            //$listMedicos = $vagenda->medicos;  
            //$listMedicos = [];
            //$listPacientes = [];
        }         
        return dd($vagendas); // , 'listPacientes', 'listMedicos'
                      
        return view('testagenda', compact('vagendas', 'perfil', 'nome'));
    }
}