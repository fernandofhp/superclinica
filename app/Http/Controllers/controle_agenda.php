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
        
            $vagendas = $vagendas->where('id_medico',$id_medico); //
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
        $id_perfil = ($perfil == "MEDICO") ? ($id_medico) : ($id_paciente);   
        //return dd($vagendas); // , 'listPacientes', 'listMedicos'
                      
        return view('agenda', compact('vagendas', 'perfil', 'nome', 'data', 'name', 'password', 'id_perfil'));
    }

    public function create(Request $request){                 
        $perfil = $request->perfil; 
        $nome = $request->nome;   
        //return var_dump($request->perfil);                    
        $data = $request->data; 
        $hora = $request->hora; 
        $datahora = $request->datahora; 
        $id_perfil = $request->id_perfil;
        $perfil_lista = 
            ($perfil == "MEDICO") ? ("PACIENTE") : ("MEDICO");
        
        if ($perfil == "MEDICO") {
            // obter a liasta de pacientes
            $lista = $this->Pacientes->select('id','nome')->get();
        }else {
            // obter a liasta de pacientes
            $lista = $this->Medicos->select('id','nome')->get();
        }
        /*
        if (!$lista) {
            $lista = array(['id' => '', 'nome' => '']);
        }
        */
        //return dd($lista);
        return view('cadagenda', compact('lista','perfil','nome',
        'data','hora','datahora','id_perfil','perfil_lista'));
    }

    public function store(Request $request){
        $perfil = $request->perfil;      
        $id_perfil = $request->id_perfil;      
        $id_lista = $request->id_lista;      
        $datahora = $request->datahora;      
        $data = $request->data; 
        //return $data;     
        $hora = $request->hora;
        //return $hora   ;   
        $tipo = $request->tipo;      
        $obs = $request->obs;
        $nome = $request->nome;
        

        $id_medico = 
            ($perfil == "MEDICO") ? ($id_perfil) : ($id_lista);
        $id_paciente = 
            ($perfil == "PACIENTE") ? ($id_perfil) : ($id_lista);
        //return var_dump($id_medico); 
        //var_dump($id_paciente);
       
        $gravar = $this->agenda_->create([
            'id_medico' => $id_medico,
            'id_paciente' => $id_paciente,
            'datahora' => $datahora,
            'data' => $data,
            'hora' => $hora,
            'tipo' => $tipo,
            'obs' => $obs
        ]);   

        //return var_dump($gravar);
        
        $perfil_lista = 
            ($perfil == "MEDICO") ? ("PACIENTE") : ("MEDICO");
        
        if ($perfil == "MEDICO") {
            // obter a liasta de pacientes
            $lista = $this->Pacientes->select('id','nome')->get();
            $vagendas = $this->agenda_->where('id_medico',$id_medico)->where('data',$data)->get();
            $name = $this->Medicos->where('id', $id_medico)->first()->relUsers->name;
            $password = $this->Medicos->where('id', $id_medico)->first()->relUsers->password;
        }else {
            // obter a liasta de pacientes
            $lista = $this->Medicos->select('id','nome')->get();
            $vagendas = $this->agenda_->where('id_paciente',$id_paciente)->where('data',$data)->get();
            $name = $this->Pacientes->where('id', $id_paciente)->first()->relUsers->name;
            $password = $this->Pacientes->where('id', $id_paciente)->first()->relUsers->password;
        }       

        //return view('cadagenda',             compact('lista','perfil','nome', 'data','hora','datahora','id_perfil','perfil_lista'));
        return view('agenda', compact('vagendas', 'perfil', 'nome', 'data', 'name', 'password', 'id_perfil'));
    }

    public function edit(){
                
    }
}