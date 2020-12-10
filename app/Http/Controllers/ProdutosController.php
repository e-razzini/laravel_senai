<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutosController extends Controller
{

    public function listarProdutos()
    {
        $produtos = Produto::all();

        return view('produtos.listarProdutos', compact('produtos'));
    }

    public function add()
    {
        $produto = new Produto();
        return view('produtos.add', compact('produto'));
    }

    public function store(Request $request)
    {
        if($request->get('Id_produto') == null){
        $produto = new Produto();
        $produto->nome_produto = $request->get('nome_produto');
        $produto->estoque = $request->get('estoque');
        $produto->save();

        }else {

            $produto = Produto::find($request->get('Id_produto'));
            $produto->nome_produto = $request->get('nome_produto');
            $produto->estoque = $request->get('estoque');
            $produto->save();
            
        }
       return redirect()->route('lista-produtos');
    }
    public function destroy(Request $request)
    {

        $produto = Produto::find($request->get('Id_produto'));
        $produto->delete();
        return redirect()->route('lista-produtos');
    }
    public function edit(Request $request)
    {

        $produto = Produto::find($request->get('Id_produto'));
        return view('produtos.add',compact('produto'));
    }
    // public function update(Request $request){
 
    //     $produto = new Produto();
    //     $produto->nome_produto = $request->set('nome_produto');
    //     $produto->estoque = $request->set('estoque');
    //     $produto->save();
    // }
}
