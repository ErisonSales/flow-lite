<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cadastro_pacientes', function (Blueprint $table) {
            $table->id();
            $table->integer('nr_prontuario')->unique()->nullable();
            $table->string('nm_paciente', 255);
            $table->string('nm_social', 255)->nullable();
            $table->date('dt_nascimento');
            $table->enum('ds_sexo',['M','F','A','O']);
            $table->string('nr_identidade');
            $table->string('nr_cpf', 11)->unique();




            $table->softDeletes();
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
        Schema::dropIfExists('cadastro_pacientes');
    }
};
