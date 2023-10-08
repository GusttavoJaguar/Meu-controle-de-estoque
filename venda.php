<?php


            session_start();
            include_once('config.php');
            //print_r('$_SESSION');


            $sql = "SELECT * FROM roupas ORDER BY id DESC";

            $result = $conexao->query($sql);

            //print_r($result);

		
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset='utf-8'>
    <meta http-equiv='X-UA-Compatible' content='IE=edge'>
    <title>Aplicação</title>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel='stylesheet' type='text/css' media='screen' href='style.css'>
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-dark border-bottom border-body" data-bs-theme="dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="modulos.html">CONTROLE DE ESTOQUE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="index.php">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="sobre.html">Sobre</a>
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
          <a class="nav-link" aria-current="page" href="suporte.php">Suporte</a>
        </li>
      </ul>
    </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
  </div>
</nav>
    <be><br><br><br>
    <form action="estoque.php" method="POST">    
    <h1><b>Venda de produtos</b></h1>
    <br><br>
    <div id="wrap">
        <!--<input type="text" class = "inputUser"name = "nome" id="nome" placeholder="Nome" required>
        <input type="number" class = "inputUser"name = "quantidade" id="quantidade" placeholder="Quantidade" required>
        <input type="text" class = "inputUser" name = "preco" id="preco" placeholder="Preço" required>
        <input type="input" class = "inputUser" name = "cod" id ="cod" placeholder="Código de barras" required>
        <input type="text" class = "inputUser" name = "descricao" id ="descricao" placeholder="Descrição" required>
        <input type="text" class = "inputUser" name = "categoria" id="categoria" placeholder="Categoria" required> -->

        <table class="table table-dark table-striped">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Quantidade</th>
              <th scope="col">Preço</th>
              <th scope="col">Código de barras</th>
              <th scope="col">Descrição</th>
              <th scope="col">Categoria</th>
              <th scope="col">Vender</th>
            </tr>
          </thead>
          <tbody>
            <?php
                while ($user_data = mysqli_fetch_assoc($result)) 
                {
                    // code...
                    echo "<tr>";
                    echo "<td>".$user_data['id']."</td>";
                    echo "<td>".$user_data['nome']."</td>";
                    echo "<td>".$user_data['quantidade']."</td>";
                    echo "<td>".$user_data['preco']."</td>";
                    echo "<td>".$user_data['cod']."</td>";
                    echo "<td>".$user_data['descricao']."</td>";
                    echo "<td>".$user_data['categoria']."</td>";
                    
                    echo "<td>
                    <a class='btn btn-success' href='delete.php?id=$user_data[id]'>             
                    <svg xmlns='http://www.w3.org/2000/svg' width='16' height='16' fill='currentColor' class='bi bi-x-circle' viewBox='0 0 16 16'>
                    <path d='M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z'/>
                    <path d='M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z'/>
                    </svg>
                    </a>
                    </td>";
                    echo "</tr>";
                }
            ?>
          </tbody>

        </table>
    </div>

    <!--
    <div id="botoes"> 
        <input type="submit" name="submit" id="submit">
    </div>
    </form>
    <div id="saida">
        <table border="0" width="100%" height="5%">
            <tr>
                <td width="30px">
                </td>
                <td>
                    Nome
                </td>
                <td>
                    Quant.
                </td>
                <td>
                    Preço
                </td>
            </tr>
        </table>
    </div>-->
    <br>

   <!-- <footer class="rodapé bg-dark col-11 m-auto">
       Desenvolvido por T.S. - Gusttavo Jaguar
    </footer> -->
    
    <script src="script1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <footer class="rodapé bg-dark col-11 m-auto">
       Desenvolvido por T.S. - Gusttavo Jaguar
    </footer>
</body>
</html>
 