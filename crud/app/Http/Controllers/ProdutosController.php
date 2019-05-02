<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Produtos;

class ProdutosController extends Controller
{
    public function index() {

        $produto = Produtos::all();

        return view('produtos.lista', compact('produto'));

    }

    public function cadastro() {

        return view('produtos.cadastrar');

    }

    public function cadastrar(Request $request) {

        Produtos::create($request->all());

        return redirect()->back();
    }

    public function atualizar($id){
        $id = Produtos::findOrFail($id);
        return view('produtos.atualizar', compact('id'));
    }

    public function atualizando($id,Request $request){

        $produtos = Produtos::findOrFail($id);

        $produtos->update($request->all());

        return redirect('/produtos');
    }

    public function deletar($id){
        // dd($id);
        $produtos = Produtos::findOrFail($id);

        $produtos->delete($produtos->id);

        return redirect('/produtos');
    }
}
