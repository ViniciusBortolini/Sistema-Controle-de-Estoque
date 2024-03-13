@extends('layout')

@section('produtoCadastrar')



<div class="container">
        <div class="row">
            <div class="col-lg-8  mt-3 offset-lg-2">
                <form action="{{ route('produto.novo') }}" method="post">
                    @csrf
                    <label for="nome">Nome do Produto</label>
                    <input type="text" name="nome"class="form-control mb-2"
                        placeholder="Digite o nome">
                    <label for="descricao">Descrição do Produto</label>
                    <input type="text" name="descricao"class="form-control mb-2"
                        placeholder="Digite a descricao">
                    <label for="custo">Custo do Produto</label>
                    <input type="number"  name="custo" class="form-control mb-2"
                        placeholder="Digite o custo">
                    <label for="nome">Valor de Venda</label>
                    <input type="text" name="valorVenda" class="form-control mb-2"
                        placeholder="Digite a valorVenda">
                    
                    <input type="submit" name="enviar" class="btn mt-3 btn-primary w-100"value="Enviar">
                </form>

            </div>
        </div>
    </div>
    @endsection