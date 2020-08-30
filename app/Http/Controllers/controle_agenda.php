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

    public function agenda(Request $request){ 
               
        $perfil = $request->perfil;  
        $name = $request->name;
        $password = $request->password;               
        $data = $request->data;               
        if ($data) {
            $data = $data;
        } else {
            $data = '2020-08-25';
        }              
        $usuario = $this->Usuario->where('name', $name)
                    ->where('password', $password)->first();
        if (empty($usuario)) {
            return view('acessar');
        }
        $id_u =  $usuario->id;        
        
        //return $id_u;         
       $vagendas = $this->agenda_;
        if ($perfil == 'MEDICO') {
            //$vagendas = $vagendas->join('pacientes','pacientes.id','id_paciente'); //teste
            $medico = $this->Medicos->where('id_usuario','=',$id_u)->first();
            if(empty($medico)){
                return view('acessar');
            }
            //return $medico->id;        
            $id_medico = $this->Medicos->where('id_usuario','=',$id_u)->first()->id; 
            $nome = $this->Medicos->where('id_usuario','=',$id_u)->first()->nome;                            
        
            //$vagendas = $vagendas->where('id_medico',$id_medico); //
            $vagendas = $vagendas->whereData($data)->get();  // 
            //$listPacientes = $vagendas->pacientes; 
            //$listMedicos = [];              
            //$listPacientes = [];              
        }

        if ($perfil == 'PACIENTE') {
            //$vagendas = $vagendas->me;  //teste
            $paciente = $this->Pacientes->where('id_usuario','=',$id_u)->first();
            if(empty($paciente)){
                return view('acessar');
            }                             
            $id_paciente = $paciente->id;              
            $nome = $paciente->nome;         
         
            $vagendas = $vagendas->whereIdPaciente($id_paciente); //
            $vagendas = $vagendas->whereData($data)->get();  //  
            //$listMedicos = $vagenda->medicos;  
            //$listMedicos = [];
            //$listPacientes = [];
        }         
        //return dd($vagendas); // , 'listPacientes', 'listMedicos'
                      
        return view('agenda', compact('vagendas', 'perfil', 'nome', 'data', 'name', 'password'));
    }

    public function create(){
        
    }
}