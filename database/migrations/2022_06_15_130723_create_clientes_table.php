<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('nome')->default('');
            $table->string('Pessoa_contcto')->default('');
            $table->string('morada')->default('');
            $table->string('email')->default('');
            $table->integer('telefone');
            $table-> string ('senha')->default('');
            $table->string('nif')->default('');
            $table->string('tipo')->default('');
            $table->string('contrato')->default('');
            $table->string('conta_corrente')->default('');
            $table->string('desconto_fatuta')->default('');
            $table->string('limite_credito')->default('');
            $table->string('gestor_cliente')->default('');
            $table->string('tipo_manuntencao')->default('');
            $table->string('estado')->default('');
            $table->string('custo_manuntencao')->default('');
            $table->timestamps();
            $table->softDeletes();
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('clientes');
    }
}
