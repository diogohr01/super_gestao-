<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterFornecedoresNovasColunas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('fornecedores', function (Blueprint $table) {
                $table->string('uf', 2);
                $table->string('email', 150);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //como remover colunas
        /*Schema::table('fornecedores', function (Blueprint $table) {
            $table->dropColumn('uf', 'email')

            php artisan migrate:rollback da mais atual para mais antiga
            php artisan migrate:rollback --step=2 faz rollback de 2 passos para atraas
    });*/
    }
}
