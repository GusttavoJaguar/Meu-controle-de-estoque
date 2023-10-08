<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Aplicação</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>

</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
        <div class="container-fluid">
          <a class="navbar-brand" href="#">CONTROLE DE ESTOQUE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.php">Início</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="sobre.php">Sobre</a>
              </li>
              <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="true">
            Sistema
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="controle.php">Cadastro de produtos</a></li>
            <li><a class="dropdown-item" href="estoque.php">Estoque</a></li>
            <li><a class="dropdown-item" href="venda.php">Venda de produtos</a></li>
          </ul>
        </li>
              <li class="nav-item">
                <a class="nav-link" href="suporte.php">Suporte</a>
              </li>
              
            </ul>
            
          </div>
          <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
        </div>
      </nav>
      <br><br>
    <h1><b>Página inicial</b></h1><br><br>
    <form action="" method="POST"></form>
    <div id="botoes">
        <div class="d-grid gap-2">
            <a href="login.php" class="btn btn-secondary">Login</a><br>
            <a href="caduser.php" class="btn btn-secondary">Cadastro de usuário</a>
        </div>
    </form>
    </div>
    <br>
    <footer class="rodapé bg-dark col-11 m-auto">
       Desenvolvido por T.S. - Gusttavo Jaguar
    </footer>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>
</html>