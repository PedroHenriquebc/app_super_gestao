<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FornecedorController extends Controller
{
    public function index(){
        $fornecedores = [
            0 => ['nome' => 'Fornecedor 1', 
            'status' => 'S',
            'cnpj' => '00.000.000/000-00'
            ],

            1 => ['nome' => 'Fornecedor 2', 
            'status' => 'S'
            ]
        ];

        $outros_fornecedores = [0 => ['nome' => 'Fornecedor 1', 
            'status' => 'S',
            'cnpj' => '00.000.000/000-00'
            ]];

        echo isset($fornecedores[1]['cnpj']) ? "CNPJ existente" : "CNPJ inexistente";
        
        return view('app.fornecedor.index', compact('fornecedores', 'outros_fornecedores'));
    }
}
