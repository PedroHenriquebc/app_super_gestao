<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TesteController extends Controller
{
    public function imprimeNomeIdade($nome, $idade){
        // echo "Seu nome é $nome e você tem $idade anos";

        // return view('site.teste', ['nome' => $nome, 'idade' => $idade]); //array associativo

        // return view('site.teste', compact('nome', 'idade')); //compact

        return view('site.teste')->with('nome', $nome)->with('idade', $idade); //with

    }
}
