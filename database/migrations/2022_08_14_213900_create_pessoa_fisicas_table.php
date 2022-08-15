<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pessoas', function (Blueprint $table) {
            $table->id();
            $table->string("nome_completo");
            $table->enum("sexo", ["M","F","I"]);
            $table->date("nascimento");
            $table->string("cpf")->unique();
            $table->string("identidade");
            $table->string("nacionalidade")->nullable();
            $table->string("estado_civil");
            // Filiação
            $table->string("nome_mae")->nullable();
            $table->string("nome_pai")->nullable();

            // Controle
            $table->string("id_usuario")->nullable();
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
        Schema::dropIfExists('pessoas');
    }
};
