<?php include('conectar.php');

	$rmOriginal = $_POST['original'];
	$rm = $_POST['codigo'];
	$nome = $_POST['nome'];
	$idade = $_POST['idade'];

	$alterar = "UPDATE tb_aluno SET cd_rm = '".$rm."', nm_nome = '".$nome."', nr_idade = '".$idade."' WHERE cd_rm = '".$rmOriginal."';";

	if ($result = $mysqli->query($alterar)) {

		?>
		<script> window.location.href = '../admin.php'; </script>
		<?php

	} else {
		echo $mysqli->error;

	}

?>