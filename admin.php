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
	<br>

	<a href="php/inserir.php">
		<img style="width: 3vw; height: 6vh;" src="img/adicionar.png">
		<span id="insert">Inserir novo registro</span>
	</a>

	<br><hr><br>
	<?php 
		include('php/conectar.php'); // Conectando com o banco de dados

		$consulta = "SELECT * FROM tb_aluno"; // Comando de consulta ao banco de dados
		$result = $mysqli->query($consulta); // Executando o comando de consulta

		while ($row = $result -> fetch_object()) { // Enquanto houverem registros no banco, eles serão exibidos em loop na ordem especificada
			echo "<br>";
			echo "<span id='id'>RM</span>: $row->cd_rm <br>
				<span id='id'>Nome</span>: $row->nm_nome <br>
				<span id='id'>Idade</span>: $row->nr_idade <br>";
				?>
				<br>
				<a href="php/apagar.php?aluno=<?php echo "$row->cd_rm"; ?>"><img style="width: 2vw; height: 4vh;" src="img/excluir.png" alt="Deletar registro"></a> <!-- Botão de apagar implementado com PHP -->
				<a href="php/alterar.php?aluno=<?php echo "$row->cd_rm"; ?>"><img style="width: 2vw; height: 4vh;" src="img/editar.png" alt="Alterar registro"></a> <!-- Botão de editar implementado com PHP -->
				<?php
			echo "<hr>";
		}

		$mysqli->close(); // Fechando a conexão com o banco de dados
 	?>
 	<br>

 	<a href="php/inserir.php">
		<img style="width: 3vw; height: 6vh;" src="img/adicionar.png">
		<span id="insert">Inserir novo registro</span>
	</a>

	<br>
 	</div>
 	<footer>
 		<p>&copy; 2022 &middot; Pedro Gil &middot; PW II</p>
 	</footer>
</body>
</html>