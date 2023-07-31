<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFornecedorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fornecedors', function (Blueprint $table) {
            $table->id();
            $table->string('razaosocial', 50);
            $table->string('cnpj', 20);
            $table->string('ie', 50); //inscrição estadual
            $table->string('im', 50);  //inscrição municipal
            $table->string('fantasia', 50); //nome fantasia
            $table->string('logradouro', 50);
            $table->integer('numero', 15);
            $table->string('complemento', 50);
            $table->string('cidade', 50);
            $table->string('uf', 2);
            $table->string('pais', 50);
            $table->string('telefone', 20);
            $table->string('email', 40);
            $table->string('responsavel', 50);

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
        Schema::dropIfExists('fornecedors');
    }
}
