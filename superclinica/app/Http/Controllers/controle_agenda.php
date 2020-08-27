<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\visao_agenda; // Model  app\visao_agenda.php
use App\Views\agenda; // Blade

class controle_agenda extends Controller{

    private $Agenda;

    public function __construct(){
        $this->vis_agenda = new visao_agenda; //Modelo = tabela
    }

    public function vagenda(){
        return view('visagenda');
    }
    public function cadagenda(){
        return view('cadagenda');
    }

    public function index(Request $request) {
        // perfil (MEDICO / PECIENTE)
        $perfil = isset($request->perfil) ? ($request->perfil) : ('PACIENTE');
        //id (id_medico / id_paciente)
        $id = isset($request->id) ? ($request->id) : (1);         
        // agend (visao_agenda) 
        $vagend = $this->vis_agenda->all();
        // locnome (nome do medico / paciente para a filtragem)
        $locnome = isset($request->locnome) ? ($request->locnome) : ('');
        if ($id == -1) {
            return 'ERRO';
        }
        if ($perfil == 'MEDICO') {
            // aplica filtros
            $vagend = $vagend->where('visao_agenda.id_medico','=', $id)->get();
            $nomepaciente = $locnome.'%';
            $vagend = $vagend->where('visao_agenda.paciente','like', $nomepaciente)->get();
        }
        if ($perfil == 'PACIENTE') {
            // aplica filtros
            $vagend = $vagend->where('visao_agenda.id_pacienta','=', $id)->get();
            $nomemedico = $locnome.'%';
            $vagend = $vagend->where('visao_agenda.medico','like', $nomemedico)->get();
        }
        return view("agenda", compact('perfil', 'id', 'locnome', 'vagend')); 
    }
}
