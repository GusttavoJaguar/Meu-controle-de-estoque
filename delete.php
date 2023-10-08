<?php

		if (!empty($_GET['id'])) 
		{
			// code...
				include_once('config.php');

				$id = $_GET['id'];

				$sqlSelect = "SELECT * FROM roupas WHERE id=$id";

				$result = $conexao->query($sqlSelect);

				if ($result->num_rows > 0)
				{
					// code...
					$sqlDelete = "DELETE FROM roupas WHERE id=$id";
					$resultDelete = $conexao->query($sqlDelete);
				}
		}

			header('Location: venda.php');

?> 