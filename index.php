<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>

    <!-- Favicon -->
	<link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
	<link rel="manifest" href="favicon/site.webmanifest">

	<link rel="stylesheet" type="text/css" href="style.css"> <!-- Implementação do CSS -->
</head>
<body>
	<h1 style="text-align: center">Entrar</h1>

	<div class="box">
		<br>

	    <form action="php/login.php" method="post">
	        <input style="width: 20vw;" placeholder="Nome de usuário" type="text" name="login" required><br>
	        <input style="width: 20vw;" placeholder="Senha" type="password" name="senha" required><br><br>
	        
	        <input type="submit" value="Entrar"><br>
	    </form>

	    <br>

	    <a href="cadastro.php">Não tem conta? Cadastre-se aqui</a><br><br>

    </div>

    <footer>
 		<p>&copy; 2022 &middot; Pedro Gil &middot; PW II</p>
 	</footer>

</body>
</html>