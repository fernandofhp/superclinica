<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(semeador_usuarios::class);
        $this->call(semeador_grade::class);
        $this->call(semeador_medicos::class);
        $this->call(semeador_pacientes::class);        
        $this->call(semeador_agenda::class);
    }
}
