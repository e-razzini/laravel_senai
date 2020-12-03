<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{
    
    public function listarProdutos(){
         $produtos = Produto::all();                  

        return view('produtos.listarProdutos', compact('produtos'));
    }
   

}