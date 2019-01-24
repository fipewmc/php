<?php
	session_start(); //inicio de sessão
	require_once "conexao.php";//nesta linha está ligada ao ficheiro de conexão á base de dados

	$btLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);//recebe o valor do formulário enviado através do método post
		
	if($btLogin){//Verifica se a variavel contem algum valor dentro dela
		
		$utilizador = filter_input(INPUT_POST, 'utilizador', FILTER_SANITIZE_STRING); //recebe o nome do utilizador
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);//recebe a palavra pass, password, senha
		

		if((!empty($utilizador)) AND (!empty($senha))){
			
			$sql = "SELECT utilizador from utilizadores WHERE utilizador = '$utilizador'";//consulta á base de dados
				
			$resultado = mysqli_query($connect, $sql);//obtenção do resultado da consulta.
			
			if (mysqli_num_rows($resultado) > 0){
				echo "<h1>AKI estou------------</h1>";//para testes

			}else{
				$_SESSION['msg'] = "Login ou Senha Incorreto";//Variavel global para enviar uma mensagem
				header("Location: login.php");//faz o redirecionamento para a página de login
			}
			
			
		}else{
			$_SESSION['msg'] = "Login ou Senha Incorreto";//Variavel global para enviar uma mensagem
			header("Location: login.php");//faz o redirecionamento para a página de login
		}
		
	}else{//se a variavel $btLogin não tiver qualquer valor vai redirecionar para a págia de login
		
		$_SESSION['msg'] = "Página não encontrada";//Variavel global para enviar uma mensagem
		header("Location: login.php");//faz o redirecionamento para a página de login
	}
?>