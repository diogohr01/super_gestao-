<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterSiteContatoCampos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::table('site_contatos', function(Blueprint $table){
            $table->dropColumn('mensagem');


        });

        Schema::table('site_contatos', function(Blueprint $table){
            $table->integer('motivo_contato');
            $table->text('mensagem');

        });


    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        Schema::table('site_contatos', function(Blueprint $table){
            $table->dropColumn('motivo_contato');
            $table->integer('mensagem');

        });
    }
}
