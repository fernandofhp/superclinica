<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('agenda', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_medico')->unsigned();
              $table->foreign('id_medico')->references('id')
                ->on('medicos')->onDelete('cascade')->onUpdate('cascade');
            $table->integer('id_paciente')->unsigned();
            $table->foreign('id_paciente')->references('id')->on('pacientes')->onDelete('cascade')->onUpdate('cascade');
            $table->datetime('datahora')->nullable();            
            $table->date('data')->nullable();            
            $table->time('hora')->nullable();            
            $table->string('obs')->nullable(); 
            $table->set('tipo', ['CONSULTA', 'EXAME', 'CIRURGIA']); 
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('agenda');
    }
}
