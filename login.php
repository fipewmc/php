<?php 
	session_start();//inicio de sessão 
 ?>
<!DOCTYPE html>
<html lang="pt-pt">
	<head>
		 <meta charset="UTF-8">
		<title>Área de login - Seja bem Vindo</title>
	</head>
	<body>
		<h4> Área de Login </h4>
		 <?php 
			if (isset($_SESSION['msg'])){//verifica se a variavel globar tem valor
				echo $_SESSION['msg']; // imprime o valor obtido através da variavel global 
				unset($_SESSION['msg']);// destroi a variavél global.
				echo "<br/><br/>";
			}
		 ?>
			<form action="valida.php" method="post">
				<label>Utilizador:</label>
				<input type="text" name="utilizador" placeholder="Coloque o seu Utilizador">
				<br/>
				<br/>
				<label>Password: </label>
				<input type="password" name="senha" placeholder="Coloque a sua palavra passe">
				<br/>
				<br/>
				<input type="submit" name="btnLogin" value="Entrar">
			</form>
			<h4>Ainda não é registado?</h4>
			<a href="registo.php">Registo Grátis</a>
	</body>
</html>