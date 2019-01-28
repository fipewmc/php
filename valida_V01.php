<?php
	session_start(); //inicio de sessão
	require_once "conexao.php";//nesta linha está ligada ao ficheiro de conexão á base de dados

	$btLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);//recebe o valor do formulário enviado através do método post
		
	if($btLogin){//Verifica se a variavel contem algum valor dentro dela
		
		$utilizador = filter_input(INPUT_POST, 'utilizador', FILTER_SANITIZE_STRING); //recebe o nome do utilizador
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);//recebe a palavra pass, password, senha
		

		if((!empty($utilizador)) AND (!empty($senha))){//verificação se os campos de utilizador e password se encontram preenchidos 
			
			
				//pesquisar utilizador na base de dados
				$result_utilizador = "SELECT id, nome, email, senha FROM utilizadores WHERE utilizador = '$utilizador' LIMIT 1";//dados para pesquisa na base de dados
				
				$resultado_utilizador = mysqli_query($connect, $result_utilizador);//Pesquisa na base de dados
					

				if ($resultado_utilizador){// verifica se a variavel $resultado_utilizador tem algum valor
					
					$row_utilizador = mysqli_fetch_assoc($resultado_utilizador);//obtenção do valor contido na base de dados

					if (password_verify($senha, $row_utilizador['senha'])){//compara a password digitada com a password guardada na base de dados
						//nas linhas de baixo vamos colocar os dados recebidos da consulta á base de dados e vamos guardar em variaveis globais
						$_SESSION['id'] = $row_utilizador['id']; // variaveis global para o ID
						$_SESSION['nome'] = $row_utilizador['nome']; //variaveis global para o nome
						$_SESSION['email'] = $row_utilizador['email'];//variaveis global para o email
					
						header("Location: administrativo.php");//faz o redirecionamento para a página de administração do site
				
				//As linhas de código abaixo foram adicionadas e comentadas utilizadas para testes						
					/*}else{
						
						//em testes 

						$senha = password_hash($senha, PASSWORD_DEFAULT);//linha para criptografar a senha através da API do PHP
						//$senha = md5($senha);//linha para criptografar a senha em md5
						
						$sql = "SELECT * FROM utilizadores WHERE utilizador = '$utilizador' AND senha = '$senha'";
						
						$resultado_utilizador = mysqli_query($connect, $sql);//Pesquisa na base de dados
												

						if(mysqli_num_rows($resultado_utilizador) == 1){
						
							$row_utilizador = mysqli_fetch_assoc($resultado_utilizador);//obtenção do valor contido na base de dados
							//nas linhas de baixo vamos colocar os dados recebidos da consulta á base de dados e vamos guardar em variaveis globais
							$_SESSION['id'] = $row_utilizador['id']; // variaveis global para o ID
							$_SESSION['nome'] = $row_utilizador['nome']; //variaveis global para o nome
							$_SESSION['email'] = $row_utilizador['email'];//variaveis global para o email
							
							//echo "<h1> Finalmente descubri!!! </h1>";
							header("Location: administrativo.php");//faz o redirecionamento para a página de administração do site

						}else{
							$_SESSION['msg'] = "Utilizador ou Senha Incorreto!";//Variavel global para enviar uma mensagem
							header("Location: login.php");//faz o redirecionamento para a página de login
						}*/	
					//Fim das linhas de código de teste		
					
					}else{	
						$_SESSION['msg'] = "Login ou Senha Incorreto!";//Variavel global para enviar uma mensagem
						header("Location: login.php");//faz o redirecionamento para a página de login
					}
				}			
		}else{//se os campos de utilizador e password não estiverem preenchidos vai ser gerada uma mensagem de erro e redirecionado para a página de login
			$_SESSION['msg'] = "Login ou Senha Incorreto!";//Variavel global para enviar uma mensagem
			header("Location: login.php");//faz o redirecionamento para a página de login
		}
		
	}else{//se a variavel $btLogin não tiver qualquer valor vai redirecionar para a págia de login
		
		$_SESSION['msg'] = "Página não encontrada!";//Variavel global para enviar uma mensagem
		header("Location: login.php");//faz o redirecionamento para a página de login
	}
?>