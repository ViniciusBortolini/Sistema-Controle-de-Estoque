@extends('layout')
@section('produtoListar')

<div class="container mt-3">
    <h2 class="text-center">Lista de produtos</h2>
    <div class="row">
        <div class="col-12">
            @if (session()->has('sucesso'))
                <div class="alert alert-success">
                    {{ session('sucesso') }}
                </div>
            @endif
            @if (session()->has('erro'))
                <div class="alert alert-danger">
                    {{ session('erro') }}
                </div>
            @endif

           

            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Nome</th>
                            <th>Descrição</th>
                            <th>Custo</th>
                            <th>Valor de Venda</th>
                            <th>Opções</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($produtos as $produto)
                            <tr>
                                <td>{{ $produto->id }}</td>
                                <td>{{ $produto->nome }}</td>
                                <td>{{ $produto->descricao }}</td>
                                <td>{{ $produto->custo }}</td>
                                <td>{{ $produto->valorVenda }}</td>
                                <td><a href="{{ route('produto.editar', ['id' => $produto->id]) }}"
                                        role="button" class="btn btn-success">Editar</a>
                                <a href="{{ route('produto.excluir', ['id' => $produto->id]) }}"
                                        role="button" class="btn btn-danger">Excluir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a role="button" href="{{route('produto.cadastro')}}" class="btn btn-primary">
                Adicionar novo Produto
            </a>
    
</div>
@endsection
