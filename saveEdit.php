<?php

        include_once('config.php');

        if (isset($_POST['update'])) 
        {
            // code...
            $id = $_POST['id'];
            $nome = $_POST['nome'];
            $quantidade = $_POST['quantidade'];
            $preco = $_POST['preco'];
            $cod = $_POST['cod'];
            $descricao = $_POST['descricao'];
            $categoria = $_POST['categoria'];
        
            $sqlUpdate = "UPDATE roupas SET nome = '$nome', quantidade = '$quantidade', preco = '$preco', cod = '$cod', descricao = '$descricao', categoria = '$categoria' WHERE id='$id'"; 

            $result = $conexao->query($sqlUpdate);


        }


    header('Location: estoque.php');


?>