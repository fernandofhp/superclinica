<?php

use Illuminate\Database\Seeder;
use App\grade;

class semeador_grade extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(grade $g){
        for ($i=8; $i <= 18; $i++) { 
            $x = str_pad($i,2,"0",STR_PAD_LEFT);
            $g->create(['hora'=>"$x:00"]);
        } 
    }
}
