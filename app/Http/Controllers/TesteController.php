<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function imprimeNomeIdade($nome, $idade){
        echo "Seu nome é $nome e você tem $idade anos";
    }
}
