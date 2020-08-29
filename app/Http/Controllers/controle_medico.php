<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Views\cadmedico;

class controle_medico extends Controller
{
    public function index(){
        return view('cadmedico');
     }
}
