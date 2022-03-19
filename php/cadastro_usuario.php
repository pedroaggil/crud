<?php include('conectar.php');

	$nome = $_POST['nome'];
	$senha = $_POST['senha'];

	$cadastrar = "INSERT INTO tb_usuario (cd_usuario, ds_login, ds_senha, nr_nivel) VALUES (null, '". $nome ."', '". $senha ."', '1')";

	if ($lista = $mysqli->query($cadastrar)) {
		?>
			<script>
				alert('Seu cadastro foi finalizado com sucesso!');
				window.location.href = "../index.php";
			</script>
		<?php 

	} else {
		echo $mysqli->error;
		
	}

 ?>