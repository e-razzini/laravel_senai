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

    public function add()
   {

       return view('produtos.add');
        
       
   }

   public function store(Request $request){

         $produto = new Produto();
         $produto->nome_produto =$request->get('nome_produto');
         $produto->estoque =     $request->get('estoque');
         $produto->save();
         
         return redirect()->route('lista-produtos');
     
   }

}