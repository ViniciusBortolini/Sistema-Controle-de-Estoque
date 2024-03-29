<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Cadastro de produto</title>
  <!-- Adicionando Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>

<body>

  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownCadastrar" role="button" data-toggle="dropdown"
              aria-haspopup="true" aria-expanded="false">
              Cadastrar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownCadastrar">
              <a class="dropdown-item" href="{{route('produto.cadastro')}}">Cadastrar Produtos</a>
              <a class="dropdown-item" href="{{route('estoque.cadastro')}}">Lançar Entrada no Estoque</a>

            </div>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownVisualizar" role="button"
              data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Visualizar
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownVisualizar">
              <a class="dropdown-item" href="{{route('produto.listar')}}">Produtos</a>
              <a class="dropdown-item" href="{{route('estoque.listar')}}">Estoque</a>

            </div>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  
  <div class="container mt-4 custom-form">
    @yield('produtoCadastrar')
    @yield('produtoListar')
    @yield('produtoAlterar')
    @yield('estoqueCadastrar')
    @yield('estoqueListar')
  </div>

  <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

</body>

</html>
