<?php
	session_start(); //inicio de sessão
	$btLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);//recebe o valor do formulário enviado através do método post
		
	if($btLogin){//Verifica se a variavel contem algum valor dentro dela
		
		$_SESSION['msg'] = "Login efectuado com sucesso! Seja Bem vindo";//Variavel global para enviar uma mensagen
		echo $_SESSION['msg'];// imprime o valor obtido através da variavel global 
		unset($_SESSION['msg']);// destroi a variavél global.
	
	}else{//se a variavel $btLogin não tiver qualquer valor vai redirecionar para a págia de login
		
		$_SESSION['msg'] = "Página não encontrada";//Variavel global para enviar uma mensagen
		header("Location: login.php");//faz o redirecionamento para a página de login
	}
?>