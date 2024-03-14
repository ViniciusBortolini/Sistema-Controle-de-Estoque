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



use App\Http\Controllers\EstoqueController;
// Rota para processar o cadastro de um novo registro no estoque
Route::post('/estoque/novo', [EstoqueController::class, 'cadastrar'])->name('estoque.entrada');

// Rota para exibir a lista de estoques
Route::get('/estoque', [EstoqueController::class, 'index'])->name('estoque.listar');

// Rota para exibir o formulário de inclusão de estoque
Route::get('/estoque/cadastro', [EstoqueController::class, 'telaCadastro'])->name('estoque.cadastro');

// Rota para excluir um item do estoque
Route::get('estoque/excluir/{id}', [EstoqueController::class, 'excluir'])->name('estoque.excluir');

// Rota para exibir o formulário de edição de produto
Route::get('estoque/editar/{id}', [EstoqueController::class, 'telaEditar'])->name('estoque.editar');

// Rota para processar a edição de um estoque
Route::post('estoque/edita', [EstoqueController::class, 'editar'])->name('estoque.edita');
