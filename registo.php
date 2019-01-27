<?php 
	session_start();//inicio de sessão 
	ob_start();
	$btnRegista = filter_input(INPUT_POST, 'btnRegista', FILTER_SANITIZE_STRING);
		if($btnRegista){//Verifica se a variavel contem algum valor dentro dela
			require_once "conexao.php";//nesta linha está ligada ao ficheiro de conexão á base de dados
			$dados = filter_input_array(INPUT_POST, FILTER_DEFAULT);//vamos receber os dados em forma de array e todos de uma só vez
			
			//var_dump($dados);//linha para verificar a variavel dados utilizada para teste
			
			$dados['senha']= password_hash($dados['senha'], PASSWORD_DEFAULT);//linha para criptografar a senha através da API do PHP
			
			//blocos de código para testes

			echo "<br/>informação da senha: ". password_get_info($dados['senha'])."<br/>";
			// Verifica se o Hash não foi gerado com mesmo algorítimo e opções passados como parâmetro
			//$options = array;
			//echo "Verifica se o Hash não foi gerado com as opções informadas: " . password_needs_rehash($dados['senha']), PASSWORD_DEFAULT) . "<br><br>";


			//As linhas de baixo servem para fazer uma inserção nda base de dados 
			$result_utilizador = "INSERT INTO utilizadores (nome, email, utilizador, senha) VALUES (
			'".$dados['nome']."',
			'".$dados['email']."',
			'".$dados['utiliza']."',
			'".$dados['senha']."'
			)";

			//INSERT INTO `utilizadores` (`id`, `nome`, `email`, `utilizador`, `senha`) VALUES (NULL, 'aaa', 'aaa', 'aaa', ENCRYPT('123'));

			//A linha de baixo executa a query na base de dados
			$resultado_utilizador = mysqli_query($connect, $result_utilizador);
			//var_dump($result_utilizador);//linha para verificar a variavel dados utilizada para teste

		}
 ?>
<!DOCTYPE html>
<html lang="pt-pt">
	<head>
		 <meta charset="UTF-8">
		<title>Área de registo - Seja bem Vindo</title>
	</head>
	<body>
		<h4> Área de registo </h4>
		<?php 
			if (isset($_SESSION['msg'])){//verifica se a variavel globar tem valor
				echo $_SESSION['msg']; // imprime o valor obtido através da variavel global 
				unset($_SESSION['msg']);// destroi a variavél global.
				echo "<br/><br/>";
			}
		?>
			<form action="" method="post">
				<label>Nome:</label>
				<input type="text" name="nome" placeholder="Digite o seu nome e sobrenome">
				<br/>
				<br/>
				<label>Email: </label>
				<input type="text" name="email" placeholder="Digite o seu email">
				<br/>
				<br/>
				<label>Utilizador: </label>
				<input type="text" name="utiliza" placeholder="Nome de utilizador">
				<br/>
				<br/>
				<label>Password: </label>
				<input type="Password" name="pass" placeholder="Crie a sua password">
				<br/>
				<br/>
				<input type="submit" name="btnRegista" value="Registo">
			</form>
			<h4>Já possui uma conta?</h4>
			<p><a href="login.php">Clique aqui</a> para fazer login.</p>
	</body>
</html>