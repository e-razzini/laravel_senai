<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProdutosController extends Controller
{
    
    public function listarProdutos(){
        $a = 30;
        $b = 45;

        $result = $a + $b;

        $arrayNumeros =[];
        $arrayNumeros ['num1'] = $result;
        $arrayNumeros ['num2'] = 'Alo';
        $arrayNumeros ['num3'] =true;



        return view('produtos.listarProdutos', compact('arrayNumeros','result'));
    }
    public function inserirProdutos(){

    }

}