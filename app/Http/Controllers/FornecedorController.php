<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index()
    {
        $fornecedores = [
            0 => [
                'nome' => 'Fornecedor 1',
                'status' => 'N',
                'cnpj' => '002194029401',
                'ddd' => '11', //SÃO PAULO
                'telefone' => '997450106'
            ],
            1 => [
                'nome' => 'Fornecedor 2',
                'status' => 'S',
                'cnpj' => '1209509',
                'ddd' => '51', //RIO GRANDE DO SUL
                'telefone' => '997450106'
            ],
            2 => [
                'nome' => 'Fornecedor 3',
                'status' => 'N',
                'cnpj' => '12515166',
                'ddd' => '32', //JUIZ DE FORA (MG)
                'telefone' => '997450106'

            ]
        ];
        //$msg =  isset($fornecedores[1]['cnpj']) ? 'CNPJ INFORMADO' : 'CNPJ NÃO INFORMADO';

        return view('app.fornecedor.index', compact('fornecedores'));
    }
}
