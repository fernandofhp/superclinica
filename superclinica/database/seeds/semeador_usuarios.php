<?php

use Illuminate\Database\Seeder;
use App\User;

class semeador_usuarios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run(User $user)
    {
        $user->create([
            'id'=>'1',
            'name'=>'fernando',
            'email'=>'fhp@fhp.com',
            'password'=>'fhp123'
        ]);
        $user->create([
            'id'=>'2',
            'name'=>'evanilde',
            'email'=>'eva@fhp.com',
            'password'=>'eva123'
        ]);
        $user->create([
            'id'=>'3',
            'name'=>'miguel',
            'email'=>'mig@fhp.com',
            'password'=>'mig123'
        ]);
        $user->create([
            'id'=>'4',
            'name'=>'bibi',
            'email'=>'bibi@fhp.com',
            'password'=>'bibi123'
        ]); 
    }
}
