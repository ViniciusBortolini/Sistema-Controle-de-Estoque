<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// Produtos Routes
use App\Http\Controllers\ProdutoController;

// Rota para exibir o formulário de edição de produto
Route::get('produto/editar/{id}', [ProdutoController::class, 'telaEditar'])->name('produto.editar');

// Rota para processar a edição de um produto
Route::post('produto/edita', [ProdutoController::class, 'editar'])->name('produto.edita');

// Rota para excluir um produto
Route::get('produto/excluir/{id}', [ProdutoController::class, 'excluir'])->name('produto.excluir');

// Rota para processar o cadastro de um novo produto
Route::post('/produto/novo', [ProdutoController::class, 'cadastrar'])->name('produto.novo');

// Rota para exibir a lista de produtos
Route::get('/produtos', [ProdutoController::class, 'index'])->name('produto.listar');

// Rota para exibir o formulário de cadastro de produto
Route::get('/produtos/cadastro', [ProdutoController::class, 'telaCadastro'])->name('produto.cadastro');
