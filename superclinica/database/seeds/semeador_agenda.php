<?php

use Illuminate\Database\Seeder;
use App\agenda;

class semeador_agenda extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(agenda $agend)
    {
        $agend->create([
            'id_medico'=>'1',
            'id_paciente'=>'1',
            'datahora'=>'2020-08-25 09:00',
            'obs'=>'Jejum de 4h',
            'tipo'=>'EXAME'
        ]);
        $agend->create([
            'id_medico'=>'1',
            'id_paciente'=>'2',
            'datahora'=>'2020-08-25 10:00',
            'obs'=>'',
            'tipo'=>'CONSULTA'
        ]);
        $agend->create([
            'id_medico'=>'1',
            'id_paciente'=>'3',
            'datahora'=>'2020-08-25 12:00',
            'obs'=>'Trazer Acompanahte',
            'tipo'=>'CIRURGIA'
        ]);
    }
}
