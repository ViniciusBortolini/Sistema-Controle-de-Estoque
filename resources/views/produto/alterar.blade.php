@extends('layout')
@section('produtoAlterar')

<div class="container">
        <div class="row">
            <div class="col-lg-8  mt-3 offset-lg-2">
                <h1>Editar {{ $produto->nome }}</h1>

                <form action="{{ route('produto.edita') }}" method="post">
                    @csrf
                    <input type="hidden" value="{{ $produto->id }}" name="id">
                    <label for="nome">Nome do Produto</label>
                    <input type="text" value="{{ $produto->nome }}" name="nome"class="form-control mb-2"
                        placeholder="Digite o nome">
                    <label for="descricao">Descrição do Produto</label>
                    <textarea name="descricao"class="form-control mb-2" placeholder="Digite a descrição">{{ $produto->descricao }} </textarea>
                    <label for="custo">Custo do Produto</label>
                    <input type="number" value="{{ $produto->custo }}" name="custo" class="form-control mb-2"
                        placeholder="Digite o Custo">
                    <label for="nome">Valor de Venda</label>
                    <input type="text" name="valorVenda" value="{{ $produto->valorVenda }}"class="form-control mb-2"
                        placeholder="Digite o valor de venda">
                                 
                    <input type="submit" name="enviar" class="btn mt-3 btn-primary w-100"value="Enviar">
                </form>

            </div>
        </div>
    </div>
    @endsection