<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
// modelos das tabelas
use App\agenda; 
use App\User; 
use App\medicos; 
use App\pacientes; 

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
               
        $perfil = $request->perfil;  
        $name = $request->name;
        $pass = $request->password;        
        $data = $request->data;                
        
        $id_u =  $this->Usuario->where('name', $name)
            ->where('password', $pass)->first()->id;        
        
        //return $id_u;         
       
        if ($perfil == 'MEDICO') {
            $medico = $this->Medicos->where('id_usuario','=',$id_u)->first();        
            $id_medico = $medico->id; 
            $nome = $medico->nome;
            $vagendas = $this->agenda_;                 
        
            //$vagendas = $vagendas->where('id_medico',$id_medico); //
            $vagendas = $vagendas->whereData()->get($data);  // 
            //$listPacientes = $vagendas->pacientes; 
            //$listMedicos = [];              
            //$listPacientes = [];              
        }

        if ($perfil == 'PACIENTE') {
            $paciente = $this->Pacientes->where('id_usuario','=',$id_u)->first();                             
            $id_paciente = $paciente->id;              
            $nome = $paciente->nome;
            $vagendas = $this->agenda_;           
         
            $vagendas = $vagendas->whereIdPaciente($id_paciente); //
            $vagendas = $vagendas->whereData($data)->get();  //  
            //$listMedicos = $vagenda->medicos;  
            //$listMedicos = [];
            //$listPacientes = [];
        }         
        //return dd($vagendas); // 
                      
        return view('testagenda', compact('vagendas', 'perfil', 'nome', 'listPacientes', 'listMedicos'));
    }
}