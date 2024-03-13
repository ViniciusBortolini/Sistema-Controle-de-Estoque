<?php

namespace App\Http\Controllers;
use App\Models\Produto; 

use Illuminate\Http\Request;

class ProdutoController extends Controller
{
    public function telaCadastro()
    {
        return view("produto.cadastrar");
    }

    public function index()
    {
        $produtos = Produto::all();
        return view("produto.listar", compact("produtos"));
    }

    public function telaEditar($id)
    {

        $produto =  Produto::where('id', '=', $id)->first();
        return view("produto.alterar", compact('produto'));
    }

    public function editar(Request $request)
    {

        $produto = Produto::find($request->id);


        $produto->id = $request->id;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->custo = $request->custo;
        $produto->valorVenda = $request->valorVenda;
        $produto->save();
        return redirect()->route('produto.listar')->with('sucesso', 'Produto editado com sucesso!');
    }
    public function excluir($id)
    {
        $produto = Produto::find($id);
        if ($produto->delete()) {

            return redirect()->route('produto.listar')->with("sucesso", "Produto Excluido com sucesso");
        }

        return redirect()->route('produto.listar')->with("erro", "Houve um erro ao excluir o produto");
    }
    public function cadastrar(Request $request)
    {
        $produto = new Produto();
        $produto->id = $request->id;
        $produto->nome = $request->nome;
        $produto->descricao = $request->descricao;
        $produto->custo = $request->custo;
        $produto->valorVenda = $request->valorVenda;
        if ($produto->save()) {
            return redirect()->route('produto.listar')->with("sucesso", "Produto Inserido com sucesso");
        } else {
            return redirect()->route('produto.listar')->with("erro", "Produto Inserido com sucesso");
        }

    }
}
