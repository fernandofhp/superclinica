<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\pacientes;
use App\Models\cadmedico;
use App\User;

class controle_paciente extends Controller
{
    function index(){
        return view('cadpaciente');
    }
}
    
