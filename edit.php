<?php

    if(!empty($_GET['id']))
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


            $id = $_GET['id'];


            $sqlSelect = "SELECT * FROM roupas WHERE id=$id";

            $result = $conexao->query($sqlSelect);

            if($result->num_rows > 0)
            {

                    while($user_data = mysqli_fetch_assoc($result))

                    {

                        $nome = $user_data['nome'];
                        $quantidade = $user_data['quantidade'];
                        $preco = $user_data['preco'];
                        $cod = $user_data['cod'];
                        $descricao = $user_data['descricao'];
                        $categoria = $user_data['categoria'];
                    }

                    //      print_r($nome);
            }


            else
            {
                    header('Location: estoque.php');
            }

            
            


           //$result = mysqli_query($conexao, "INSERT INTO roupas(nome, quantidade, preco, cod, descricao, categoria) VALUES ('$nome', '$quantidade', '$preco', '$cod', '$descricao', '$categoria')");

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
    <a class="navbar-brand" href="index.html">CONTROLE DE ESTOQUE</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.html">Início</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" aria-current="page" href="sobre.html">Sobre</a>
        </li>
        <li class="nav-item">
                <a class="nav-link active" href="modulos.html">Módulos</a>
              </li>
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="suporte.html">Suporte</a>
        </li>
      </ul>
    </div>
    <div class="d-flex">
        <a href="sair.php" class="btn btn-danger me-5">Sair</a>
    </div>
  </div>
</nav>
    <be><br><br><be><br><br>
    <form action="saveEdit.php" method="POST">    
    <h1><b>Estoque</b></h1>
    <div id="wrap">
        <input type="text" class = "inputUser"name = "nome" id="nome" placeholder="Nome" value="<?php echo $nome ?>" required>
        <input type="number" class = "inputUser"name = "quantidade" id="quantidade" placeholder="Quantidade" value="<?php echo $quantidade ?>"required>
        <input type="text" class = "inputUser" name = "preco" id="preco" placeholder="Preço" value="<?php echo $preco ?>" required>
        <input type="input" class = "inputUser" name = "cod" id ="cod" placeholder="Código de barras" value="<?php echo $cod ?>" required>
        <input type="text" class = "inputUser" name = "descricao" id ="descricao" placeholder="Descrição" value="<?php echo $descricao ?>" required>
        <input type="text" class = "inputUser" name = "categoria" id="categoria" placeholder="Categoria" value="<?php echo $categoria ?>" required>
    </div>
    <div id="botoes"> 

        <input type="hidden" name="id" value="<?php echo $id ?>">    
        <input type="submit" name="update" id="update">
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
    <footer class="rodapé bg-dark col-11 m-auto">
       Desenvolvido por T.S. - Gusttavo Jaguar
    </footer>
    <script src="script1.js"></script>
</body>
</html>
