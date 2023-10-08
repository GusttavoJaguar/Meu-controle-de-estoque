<?php

	if(isset($_POST['submit']))
		{	
			// echo('Nome: ' . $_POST['nome']);
			// echo('<br>');
			// echo('Quantidade: ' . $_POST['quantidade']);
			// echo('<br>');
			// echo('Preço: ' . $_POST['preco']);
			// echo('<br>');
			// echo('Código de Barras: ' . $_POST['cod']);
			// echo('<br>');
			// echo('Descrição: ' . $_POST['descricao']);
			// echo('<br>');
			// echo('Categoria: ' . $_POST['categoria']);
			// echo('<br>');


			include_once('config.php');

			$nome = $_POST['nome'];
			$quantidade = $_POST['quantidade'];
			$preco = $_POST['preco'];
			$cod = $_POST['cod'];
			$descricao = $_POST['descricao'];
			$categoria = $_POST['categoria'];
			
			$result = mysqli_query($conexao, "INSERT INTO roupas(nome, quantidade, preco, cod, descricao, categoria) VALUES ('$nome', '$quantidade', '$preco', '$cod', '$descricao', '$categoria')");

		}
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
          <a class="nav-link" aria-current="page" href="sobre.php">Sobre</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="modulos.php" role="button" data-bs-toggle="dropdown" aria-expanded="true">
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
    <be><br><br><be><br><br>
    <form action="controle.php" method="POST">    
    <h1><b>Cadastros de produtos</b></h1>
    <be><br><br>
    <div id="wrap">
        <input type="text" class = "inputUser"name = "nome" id="nome" placeholder="Nome" required>
        <input type="number" class = "inputUser"name = "quantidade" id="quantidade" placeholder="Quantidade" required>
        <input type="text" class = "inputUser" name = "preco" id="preco" placeholder="Preço" required>
        <input type="input" class = "inputUser" name = "cod" id ="cod" placeholder="Código de barras" required>
        <input type="text" class = "inputUser" name = "descricao" id ="descricao" placeholder="Descrição" required>
        <input type="text" class = "inputUser" name = "categoria" id="categoria" placeholder="Categoria" required>
    </div>
    <div id="botoes"> 

        <input type="submit" name="submit" id="submit">
    </div>
    
    </form>
    <!--<div id="saida">
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


    <script src="script1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <br>
    <footer class="rodapé bg-dark col-11 m-auto">
       Desenvolvido por T.S. - Gusttavo Jaguar
    </footer>
</body>
</html>
