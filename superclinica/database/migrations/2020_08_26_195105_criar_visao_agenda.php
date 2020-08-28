<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CriarVisaoAgenda extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::statement(
            "CREATE OR REPLACE VIEW visao_agenda AS
                SELECT 
                GRADE.HORA,
                COALESCE((SELECT ID FROM AGENDA 
                WHERE (TIME(AGENDA.DATAHORA) = GRADE.HORA) LIMIT 1 ),'') AS ID,
                COALESCE((SELECT DATE(DATAHORA) FROM AGENDA 
                WHERE (TIME(AGENDA.DATAHORA) = GRADE.HORA) LIMIT 1 ),'') AS DATA,
                COALESCE((SELECT OBS FROM AGENDA WHERE (TIME(AGENDA.DATAHORA) = GRADE.HORA)LIMIT 1 ),'') AS OBS,
                COALESCE((SELECT TIPO FROM AGENDA WHERE (TIME(AGENDA.DATAHORA) = GRADE.HORA)LIMIT 1 ),'') AS TIPO,
                COALESCE((SELECT ID FROM MEDICOS WHERE ((AGENDA.ID_MEDICO = MEDICOS.ID )
                                                AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS ID_MEDICO,
                COALESCE((SELECT NOME FROM MEDICOS WHERE ((AGENDA.ID_MEDICO = MEDICOS.ID )
                                                AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS MEDICO,
                COALESCE((SELECT CRM FROM MEDICOS WHERE ((AGENDA.ID_MEDICO = MEDICOS.ID )
                                            AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS CRM,
                COALESCE((SELECT ESPECIALIDADE FROM MEDICOS WHERE ((AGENDA.ID_MEDICO = MEDICOS.ID )
                                            AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS ESPECIALIDADE,
                COALESCE((SELECT ID FROM PACIENTES WHERE ((AGENDA.ID_PACIENTE = PACIENTES.ID )
                                            AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS ID_PACIENTE,
               COALESCE((SELECT NOME FROM PACIENTES WHERE ((AGENDA.ID_PACIENTE = PACIENTES.ID )
                                            AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS PACIENTE,
                COALESCE((SELECT CPF_CARD_NRO FROM PACIENTES WHERE ((AGENDA.ID_PACIENTE = PACIENTES.ID )
                                            AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS CPF_CARD_NRO,
                COALESCE((SELECT ENDER FROM PACIENTES WHERE ((AGENDA.ID_PACIENTE = PACIENTES.ID )
                                            AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS ENDER,
                COALESCE((SELECT DATANASC FROM PACIENTES WHERE ((AGENDA.ID_PACIENTE = PACIENTES.ID )
                                            AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS DATANASC,
                COALESCE((SELECT FONE FROM PACIENTES WHERE ((AGENDA.ID_PACIENTE = PACIENTES.ID )
                                            AND(TIME(AGENDA.DATAHORA) = GRADE.HORA))LIMIT 1 ),'') AS FONE
            FROM
                GRADE LEFT JOIN         
                AGENDA  ON (TIME(AGENDA.DATAHORA) = GRADE.HORA)
            LEFT JOIN 
                MEDICOS ON (AGENDA.ID_MEDICO = MEDICOS.ID )
            LEFT JOIN 
                PACIENTES ON (AGENDA.ID_PACIENTE = PACIENTES.ID )
             ORDER BY GRADE.HORA;           
            
                "
             );
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //DB::statement("DROP VIEW agendaview");
    }
}
