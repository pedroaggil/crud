<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Alterar</title>

	<!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/site.webmanifest">
	
	<link rel="stylesheet" type="text/css" href="../style.css">
</head>
<body>
	<h1 style="text-align: center">Alterar</h1>

	<div class="box">
	<?php include('conectar.php'); 



		$cod = $_GET['aluno'];
		$sql = "SELECT * FROM tb_aluno WHERE cd_rm = $cod";

		if ($lista = $mysqli->query($sql)) {
			while ($item_lista = $lista->fetch_object()) {
				?>

				<br><span id="id">RM</span>: <?php echo $item_lista->cd_rm ?><br><br>

				<form method="post" action="alterar_form.php">
					<input type="hidden" name="original" value="<?php echo $item_lista->cd_rm ?>">
					<input type="text" required min="10000" max="99999" name="codigo" value="<?php echo $item_lista->cd_rm ?>"><br>

					<input type="text" name="nome" required value="<?php echo $item_lista->nm_nome ?>"><br>
					<input type="text" name="idade" required value="<?php echo $item_lista->nr_idade ?>"><br><br>

					<input type="submit" value="Alterar">
				</form>

				<?php
			}
		}

	?>
	<br>
	<a href="javascript:history.go(-1)">Voltar</a>
	<br><br>
	</div>
	<footer>
 		<p>&copy; 2022 &middot; Pedro Gil &middot; PW II</p>
 	</footer>
</body>
</html>