<!DOCTYPE html>
<html lang="pt-br">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Cadastro</title>

	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">

	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

	<h1 style="text-align: center;">Cadastro de usuário</h1>

	<div class="box">
		<br>

		<form action="php/cadastro_usuario.php" method="post">
			<input type="text" placeholder="Nome de usuário" name="nome" style="width: 20vw;" required><br>
			<input type="password" placeholder="Senha" name="senha" style="width: 20vw;" required><br><br>

			<input type="submit" value="Cadastrar">
		</form>
		<br>
	</div>

	<footer>
 		<p>&copy; 2022 &middot; Pedro Gil &middot; PW II</p>
 	</footer>
</body>
</html>