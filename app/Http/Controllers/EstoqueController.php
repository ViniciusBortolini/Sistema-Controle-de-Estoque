<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Estoque;
use App\Models\Produto;

class EstoqueController extends Controller
{
    public function telaCadastro()
    {
        $produtos = Produto::all();
        return view("estoque.entrada", compact('produtos'));
    }
    public function cadastrar(Request $req){
        $estoque= new Estoque();
        $estoque->id = $req->id;
        $estoque->idProduto = $req->idProduto;
        $estoque->quantidade = $req->quantidade;
        $estoque->precoUnitario= $req->precoUnitario;

        if ($estoque->save()) {
            return redirect()->route('estoque.listar')->with("sucesso", "Produto Inserido com sucesso");
        } else {
            return redirect()->route('estoque.listar')->with("erro", "Não foi possível inserir o");
        }
    }

    public function excluir($id)
    {
        $estoque = Estoque::find($id);
        if ($estoque->delete()) {

            return redirect()->route('estoque.listar')->with("sucesso", "Registro de estoque excluido com sucesso");
        }

        return redirect()->route('estoque.listar')->with("erro", "Houve um erro ao excluir o produto");
    }

    public function index()
    {
        $estoques = Estoque::with('produto')->get(); // Carrega os produtos associados a cada entrada de estoque
    return view("estoque.listar", compact("estoques"));
    }

    public function telaEditar($id)
    {
        $estoque =  Estoque::where('id', '=', $id)->first();
        return view("estoque.alterar", compact('estoque'));
    }

    public function editar(Request $req){

        $estoque = Estoque::find($req->id);
        $estoque->id = $req->id;
        $estoque->idProduto = $req->idProduto;
        $estoque->quantidade = $req->quantidade;
        $estoque->precoUnitario= $req->precoUnitario;
        $estoque->save();
        return redirect()->route('produto.listar')->with('sucesso', 'Estoque editado com sucesso!');
    }
}
