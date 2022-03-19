<?php
	session_start();
	include('conectar.php');

	if (isset($_POST['login'])) {

	    $nome = $_POST['login'];
	    $senha = $_POST['senha'];

	    $sql = "SELECT * FROM tb_usuario WHERE ds_login = '".$nome."' AND ds_senha = '".$senha."'";

	    if ($res = $mysqli->query($sql)) {
	    
	        if ($res->num_rows == 1) {
	    
	            while ($linha = $res->fetch_object()) {
	    
	                $_SESSION['nome'] = $linha->ds_login;
	                $_SESSION['senha'] = $linha->ds_senha;
	                $_SESSION['nivel'] = $linha->nr_nivel;
	    
	                if ($linha->nr_nivel == 1) {
	                    ?> <script> window.location.href = "../user.php"; </script> <?php

	                } elseif ($linha->nr_nivel == 2) {
	                	?> <script> window.location.href = "../admin.php"; </script> <?php

	                } else {
	                	echo $result->error;

	                }
	            }
	        }
	    }
	}

?>