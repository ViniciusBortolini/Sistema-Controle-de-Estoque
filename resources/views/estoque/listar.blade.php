@extends('layout')
@section('estoqueListar')

<div class="container mt-3">
    <h2 class="text-center">Lista de estoque</h2>
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
                            <th>Produto</th>
                            <th>Quantidade</th>
                            <th>Preço Unitário</th>
                            <th>Preço Total</th>
                            <th>Opções</th>
                            <th></th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($estoques as $estoque)
                            <tr>
                                <td>{{ $estoque->id }}</td>
                                <td>{{ $estoque->produto ? $estoque->produto->nome : 'Produto não encontrado' }}</td>
                                <td>{{ $estoque->quantidade }}</td>
                                <td>{{ number_format($estoque->precoUnitario, 2) }}</td>
                                <td>{{ number_format($estoque->quantidade * $estoque->precoUnitario, 2) }}</td>
                                <td>
                                <a href="{{ route('estoque.excluir', ['id' => $estoque->id]) }}"
                                        role="button" class="btn btn-danger">Excluir</a></td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <a role="button" href="{{route('estoque.cadastro')}}" class="btn btn-primary">
                Lançar entrada
            </a>
    
</div>
@endsection
