<?php

use App\Fornecedor;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB; // Certifique-se de importar a classe DB

class FornecedorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $fornecedor = new Fornecedor();
        $fornecedor->name = 'Fornecedor 100';
        $fornecedor->email = 'fornecedor100@gmail.com';
        $fornecedor->site = 'fornecedor.com';
        $fornecedor->uf = 'RS';
        $fornecedor->save();

        Fornecedor::create([
            'name' => 'testecreate',
            'email' => 'create@gmail.com',
            'uf' => 'CE',
            'site' => 'create.com',
        ]);

        DB::table('fornecedores')->insert([
            'name' => 'testecreate2',
            'email' => 'create@gmail2.com',
            'uf' => 'CE',
            'site' => 'create2.com',
        ]);
    }
}
