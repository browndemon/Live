<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Produtos;

class ProdutosController extends Controller
{
    public function cadastrar(Request $request){

        Produtos::create($request->all());
        
        return response()->json(['Sucess' => "Cadastrado com sucesso!"]);
    }

    public function listar(){

        $produtos = Produtos::get();
        
        return response()->json($produtos);
    }

    public function atualizar(Request $request, $id){

        $produtos = Produtos::findOrFail($id);
        
        $produtos->nome = $request->get('nome');
        $produtos->marca = $request->get('marca');
        $produtos->preco = $request->get('preco');
        $produtos->quantidade = $request->get('quantidade');
        $produtos->save();

        return response()->json(['Success' => 'Atualizado com sucesso!']);
    }

    public function deletar($id){

        $produtos = Produtos::findOrFail($id);

        $produtos->delete();

        return response()->json(['Success' => 'Deletado com sucesso!']);
    }
}
