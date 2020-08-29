<?php

use Illuminate\Database\Seeder;
use App\pacientes;

class semeador_pacientes extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(pacientes $paciente)
    {
        $paciente->create([
            'id_usuario'=>'1000',
            'nome'=>'Sr.José',
            'ender'=>'Rua tal',
            'fone'=>'(16) 98850-4000',
            'datanasc'=>'1967-04-20',
            'cpf_card_nro'=>'MAX-001-AP-55721'
        ]);
        $paciente->create([
            'id_usuario'=>'2000',
            'nome'=>'Dona Clotilde',
            'ender'=>'Rua Severino Barba, 44',
            'fone'=>'(16) 98811-5000',
            'datanasc'=>'1967-04-20',
            'cpf_card_nro'=>'MAX-002-AQ-55721'
        ]);
        $paciente->create([
            'id_usuario'=>'3000',
            'nome'=>'Seu Hernesto',
            'ender'=>'Av. Barbara Vila Boa, 46',
            'fone'=>'(16) 98870-0805',
            'datanasc'=>'1987-08-18',
            'cpf_card_nro'=>'MAZ-003-AR-55721'
        ]);
    }
}
