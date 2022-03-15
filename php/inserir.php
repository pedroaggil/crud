<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Inserir</title>
	
	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/site.webmanifest">
	
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1 style="text-align: center">Cadastrar aluno</h1>
	<div class="box">
		<br>
		<?php include('conectar.php');

			$sql = "SELECT * FROM tb_aluno";

			if($lista = $mysqli->query($sql)) {
				?>

				<form method="post" action="inserir_form.php">
					<input type="number" required min="10000" max="99999" value="" style="width: 20vw;" placeholder="Registro de Matrícula (RM)" name="rmAluno">
					<input type="text" required name="nomeAluno" value="" style="width: 20vw;" placeholder="Nome"><br>
					<input type="text" min="0" required name="idadeAluno" value="" style="width: 20vw;" placeholder="Idade">
					<br><br>

					<input type="submit" value="Inserir"><br><br>
					<a href="javascript:history.go(-1)">Voltar</a>
				</form>

				<?php
			}
		?>
		<br>
	</div>
	<footer>
 		<p>&copy; 2022 &middot; Pedro Gil &middot; PW II</p>
 	</footer>
</body>
</html>