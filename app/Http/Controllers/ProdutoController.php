<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Produto;

class ProdutoController extends Controller
{
    //

    public function index(){
        $produtos = Produto::all();

        return View('produtosIndex')->with(["produtos" => $produtos]);
    }

    /**
     * Mostrar um produto pelo ID
     */

    public function show($id){

        $produto = Produto::findorfail($id);
        return View('produtoShow')->with(["produto" => $produto]);
        //return Produto::find($id);
    }

    public function create(){
        //
        return View('produtoCreate');
    }

    /**
     * Criar um produto no banco
     */

    public function store(Request $request){

        $produto = Produto::create([
            "nome" => $request->nome,
            "codigo" => $request->codigo,
            "preco" => $request->preco,
            "estoque" => $request->estoque,
            "descricao" => $request->descricao,
        ]);

        $produto->save();

        return $produto;

    }

    public function edit($id) {
        $produto = Produto::find($id);
        return View('produtoEdit', ["produto" => $produto]);
    }

    /**
     * Atualizar um produto
     */

    public function update(Request $request){

        $produto = Produto::findOrFail();

        $produto->nome = $request('nome');
        $produto->codigo = $request('codigo');
        $produto->preco = $request('preco');
        $produto->estoque = $request('estoque');
        $produto->descricao = $request('descricao');

        $produto->save();
        return $produto;

    }

    /**
     * Excluir um produto
     */

    public function delete(Request $request){

        $produto = Produto::findOrFail($id);
        $produto->delete();

        return redirect(route('produto.index'), 200);
    }
}
