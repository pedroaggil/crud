<?php include('conectar.php');

	$rm = $_POST['rmAluno'];
	$nome = $_POST['nomeAluno'];
	$idade = $_POST['idadeAluno'];

	$inserir = "INSERT INTO tb_aluno (cd_rm, nm_nome, nr_idade) VALUES ('". $rm ."', '". $nome ."', '". $idade ."')";

	if ($lista = $mysqli->query($inserir)) {
		?> <script>	window.location.href = "../admin.php"; </script> <?php 

	} else {
		echo $mysqli->error;
	}
?>