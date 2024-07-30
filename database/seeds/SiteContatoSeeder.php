<?php

use Illuminate\Database\Seeder;
use \App\SiteContato;

class SiteContatoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $contato = new SiteContato();
        $contato->name = 'Sistema SG';
        $contato->telefone = '51995026470';
        $contato->email = 'sistema@gmail.com';
        $contato->motivo_contato = 1;
        $contato->mensagem = 'opa meu amigo, vamo dale';
        $contato->save();
    }
}
