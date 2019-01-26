<?php
	session_start();
	unset($_SESSION['id'], $_SESSION['nome'], $_SESSION['email']);
	$_SESSION['msg'] = "Logout efectuado com sucesso";//Variavel global para enviar uma mensagem
	header("Location: login.php");//faz o redirecionamento para a página de login
?>