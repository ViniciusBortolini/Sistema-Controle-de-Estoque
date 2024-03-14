@extends('layout')
@section('estoqueCadastrar')

<div class="container">
    <div class="row">
        <div class="col-lg-8 mt-3 offset-lg-2" >
            <form action="{{ route('estoque.entrada') }}" method="post" id="formEstoque">
                @csrf
                <label for="produto">Produto</label>
                <select class="form-control" name="idProduto" id="produtoSelect">
                    @foreach($produtos as $produto)
                        <option value="{{ $produto->id }}" teste="{{ $produto->custo }}">{{ $produto->nome }}</option>
                    @endforeach
                </select>
                <label for="quantidade">Quantidade</label>
                <input type="number" class="form-control" id="quantidade" placeholder="Quantidade" name="quantidade" value="1" min="1">
                <label for="precoUnitario">Preço Unitário</label>
                <input type="number" class="form-control" id="precoUnitario" placeholder="Preço Unitário" name="precoUnitario"  min="1" >
                <label for="precoTotal">Preço Total</label>
                <input type="number" class="form-control" id="precoTotal" placeholder="Preço Total" name="precoTotal"  min="1" readonly>
                <button type="submit" class="btn btn-primary custom-button" id="botao">Cadastrar</button>
            </form>
        </div>
    </div>
</div>

<script>
    document.getElementById('produtoSelect').addEventListener('change', function() {
        var selectedOption = this.options[this.selectedIndex];
        var preco = selectedOption.getAttribute('teste');
        document.getElementById('precoUnitario').value = preco;
        atualizarPrecoTotal();
    });
    document.getElementById('quantidade').addEventListener('input', function() {
        atualizarPrecoTotal();
    });
    function atualizarPrecoTotal() {
        var quantidade = parseFloat(document.getElementById('quantidade').value);
        var precoUnitario = parseFloat(document.getElementById('precoUnitario').value);
        var precoTotal = quantidade * precoUnitario;
        document.getElementById('precoTotal').value = precoTotal.toFixed(2);
    }
</script>
@endsection