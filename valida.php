<?php
	session_start(); //inicio de sessão
	include_once("conexao.php");
	$btLogin = filter_input(INPUT_POST, 'btnLogin', FILTER_SANITIZE_STRING);//recebe o valor do formulário enviado através do método post
		
	if($btLogin){//Verifica se a variavel contem algum valor dentro dela
		
		$utilizador = filter_input(INPUT_POST, 'utilizador', FILTER_SANITIZE_STRING); //recebe o nome do utilizador
		$senha = filter_input(INPUT_POST, 'senha', FILTER_SANITIZE_STRING);//recebe a palavra pass, password, senha
		
		if((!empty($utilizador)) AND (!empty($senha))){

			//A lina de baixo serve para criptografar a password
				echo password_hash($senha, PASSWORD_DEFAULT);// Criptografia da palavra passe, password, senha através da API do PHP

			//pesquisar utilizador na base de dados
				$result_utilizador = "SELECT id, nome, email, senha FROM utilizadores WHERE utilizador = $utilizador LIMIT 1";//dados para pesquisa na base de dados
				echo"<br/><br/>";//linha de teste para apagar
				var_dump($result_utilizador);//linha de teste para apagar
				$resultado_utilizador = mysqli_query($conn, $result_utilizador);//Pesquisa na base de dados
				echo"<br/><br/>";//linha de teste para apagar
				var_dump($resultado_utilizador);//linha de teste para apagar
				
				/*if $resultado_utilizador{// verifica se a variavel $resultado_utilizador tem algum valor
					$row_utilizador = mysqli_fetch_assoc($resultado_utilizador);//obtenção do valor contido na base de dados
					if (password_verify ($senha, $row_utilizador['senha'])){//compara a password digitada com a password guardada na base de dados
						
						//para desenvolvimento

						header("Location: administrativo.php");//faz o redirecionamento para a página de administração do site
					}else{
						$_SESSION['msg'] = "Login ou Senha Incorreto";//Variavel global para enviar uma mensagem
						header("Location: login.php");//faz o redirecionamento para a página de login
					}

				}*/
		}else{
			$_SESSION['msg'] = "Login ou Senha Incorreto";//Variavel global para enviar uma mensagem
			header("Location: login.php");//faz o redirecionamento para a página de login
		}
		
	}else{//se a variavel $btLogin não tiver qualquer valor vai redirecionar para a págia de login
		
		$_SESSION['msg'] = "Página não encontrada";//Variavel global para enviar uma mensagem
		header("Location: login.php");//faz o redirecionamento para a página de login
	}
?>