<?php

	if(isset($_POST['submit']))
		{	
			//echo('Nome: ' . $_POST['nome']);
			//echo('<br>');
			//echo('senha: ' . $_POST['senha']);
			// echo('<br>');
			// echo('E-mail: ' . $_POST['email']);
			// echo('<br>');
			// echo('Telefone: ' . $_POST['telefone']);


			include_once('config.php');

			$email = $_POST['email'];
			$senha = $_POST['senha'];

			$result = mysqli_query($conexao, "INSERT INTO login(email, senha) VALUES ('$email', '$senha')");

		}
?>


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
          <a class="navbar-brand" href="index.html">CONTROLE DE ESTOQUE</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
                <a class="nav-link" href="index.html">Início</a>
                </li>
              <li class="nav-item">
                <a class="nav-link" href="sobre.html">Sobre</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="suporte.html">Suporte</a>
              </li>
            </ul>
            
          </div>
        </div>
      </nav>
      <br><br><br>
   <div id="wrap">
   		<div>
           <form action="testLogin.php" method="POST">
            <legend><b>LOGIN</b></legend>
            <br><br>
            <div class="inputBox">
                    <input type="text" name="email" id="email" class="inputUser" placeholder="E-mail" required>
                    <label for="email" class="labelInput"></label>
                </div>
                <br>
	            <div class="inputBox">
	                <input type="password" name="senha" id="senha" class="inputUser" placeholder="Senha" required>
	                <label for="senha" class="labelInput"></label>
	            </div>
	            <br>
                <input type="submit" name="submit" id="submit">
                <!--<a href="modulos.html"><button>Enviar</button>-->
            </form>
        </div>

    </div>
    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
    <footer class="rodapé bg-dark col-11 m-auto">
       Desenvolvido por T.S. - Gusttavo Jaguar
    </footer>
</body>
</html>
