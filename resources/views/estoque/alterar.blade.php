@extends('layout')
@section('estoqueAlterar')

<div class="container">
    <div class="row">
        <div class="col-lg-8 mt-3 offset-lg-2" >
            <form action="{{route('estoque.entrada')}}" method="post">
                @csrf
                <label for="produto">Produto</label>
                <select class="form-control" name="idProduto">
                    @foreach($produtos as $produto)
                        <option value="{{ $produto->id }}">{{ $produto->nome }}</option>
                    @endforeach
                </select>
                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" placeholder="Quantidade" name="quantidade" value="{{ $produto->id }}" min="1">

                <label for="preco">Preço</label>
                <input type="number" class="form-control" id="precoUnitario" placeholder="Preço Unitário" name="precoUnitario"  min="1" value="$produto->preco">

                <label for="preco">Preço Total</label>
                <input type="number" class="form-control" id="quantidade" placeholder="Quantidade" name="quantidade"  min="1" value="$produto->preco">
                <button type="submit" class="btn btn-primary custom-button" id="botao">Cadastrar</button>

            </form>
        </div>
    </div>
</div>

@endsection