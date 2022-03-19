<!DOCTYPE html> <!-- Página inicial implementada com funções PHP -->
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<title>Exibir</title>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">

	<link rel="stylesheet" type="text/css" href="style.css"> <!-- Implementação do CSS -->
</head>
<body>
	<h1 style="text-align: center">Alunos da Etec de Itanhaém</h1>
	<div class="box">
	<br><br><hr><br>

	<?php 
		include('php/conectar.php');

		$consulta = "SELECT * FROM tb_aluno";
		$result = $mysqli->query($consulta);

		while ($row = $result -> fetch_object()) {
			echo "<br>";
			echo "<span id='id'>RM</span>: $row->cd_rm <br>
				<span id='id'>Nome</span>: $row->nm_nome <br>
				<span id='id'>Idade</span>: $row->nr_idade <br>";

				?>

				<br>
				<?php

			echo "<hr>";
		}

		$mysqli->close(); // Fechando a conexão com o banco de dados
 	?>

 	<br>
 	</div>
 	<footer>
 		<p>&copy; 2022 &middot; Pedro Gil &middot; PW II</p>
 	</footer>
</body>
</html>