<?php

use Illuminate\Database\Seeder;
use App\medicos;

class semeador_medicos extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(medicos $medico)
    {
        $medico->create([
            'id_usuario'=>'1',
            'nome'=>'DR FERNANDO',
            'especialidade'=>'ADM',
            'crm'=>'1000'
        ]);
        $medico->create([
            'id_usuario'=>'2',
            'nome'=>'DRA EVANILDE',
            'especialidade'=>'CLINICA GERAL',
            'crm'=>'2000'
        ]);
        $medico->create([
            'id_usuario'=>'1',
            'nome'=>'DR MIGUEL',
            'especialidade'=>'NUTROLOGO',
            'crm'=>'3000'
        ]);
        $medico->create([
            'id_usuario'=>'2',
            'nome'=>'DRA BIBI',
            'especialidade'=>'CARDIOLOGISTA',
            'crm'=>'4000'
        ]);
    }
}
