<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarTabelaPacientes extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientes', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('id_usuario')->unsigned();
              $table->foreign('id_usuario')->references('id')
                ->on('users')->onDelete('cascade')->onUpdate('cascade');
            $table->string('nome');
            $table->date('datanasc');
            $table->string('ender');
            $table->string('fone');
            $table->string('cpf_card_nro');
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
        Schema::dropIfExists('pacientes');
    }
}
