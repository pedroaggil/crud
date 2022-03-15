<?php 
	include('conectar.php');

	// Comando para deletar o registro no banco
	$deletar = "DELETE FROM tb_aluno WHERE cd_rm = " . $_GET['aluno'];

	if ($result = $mysqli->query($deletar)) { // Se conseguir executar o comando, o registro será excluído
		?>
		<script>
			window.location.href = '../index.php'
		</script>
		<?php
	} else { // Senão, apresentará um erro
		echo $result->error;
	}

 ?>