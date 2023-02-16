<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Meu Projeto</title>
    <link href="./css/bootstrap.min.css" rel="stylesheet" >
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="./index.php">
         <img src="./img/image.png" alt="Bootstrap" width="90" height="48">
    </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="./Index.php">Pagina Inicial</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href=".usuarios.php">Usuarios</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Produtos
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="./cadastro_produtos.php">Cadastro</a></li>
            <li><a class="dropdown-item" href="./pesquisa_produtos.php">Pesquisa</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="./estoque.php">Estoque</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="./clientes.php">Clientes</a>
        </li>
      </ul>
      
    </div>
  </div>
</nav>
<div class="container mt-4">
  <div class="row">
    <div class="col-md-4 col-sm-12">
    <div class="mb-3">
             <label for="exampleFormControlInput1" class="form-label">Endereço de Email</label>
             <input type="email" name="email" class="form-control" placeholder="exemplo@email.com">
        </div>
            <div class="mb-3">
        <label for="exampleFormControlTextarea1" class="form-label">Digite sua reclamação</label>
        <textarea name="reclamacao" class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
</div>
    </div>
    <div class="card mt-4">
  <div class="card-header col-4">
    Bem vindo ao sistema
  </div>
  <div class="card-body">
    <h5 class="card-title">Meu titulo do card</h5>
    <p class="card-text">Este é o card para utilização do nosso sistema</p>
    <a href="#" class="btn btn-primary">Clique aqui para saber mais</a>
  </div>
</div>
    <div class="col-4">
    <table class="table table-bordered table-hover">
  <thead>
    <tr>
      <th scope="col">Id</th>
      <th scope="col">Nome</th>
      <th scope="col">Cpf</th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody class="table-group-divider">
    <tr>
      <th scope="row">1</th>
      <td>Giovani</td>
      <td>111.111.111-11</td>
      <td>
        <a class="btn btn-warning"> Editar </a>
      </td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
    </div>
  </div>
</div>
<h1> "Hello World" </h1>
<script src="./js/bootstrap.bundle.min.js"script>
</body>
</html>