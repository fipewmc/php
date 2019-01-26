<?php
	session_start(); //inicio de sessão
?>
<!DOCTYPE html>
<html>
<head>
	<?php
	echo "<title> ..: Maracação de Férias de ".$_SESSION['nome']." :..</title>";
	?>
</head>

<body>
	<!--Inicio de bloco de código em PHP -->
	<?php
		if (empty($_SESSION['id'])){
			$_SESSION['msg'] = "A sua sessão expirou! <br/><br/>Por favor faça login novamente.";//Variavel global para enviar uma mensagem
			header("Location: login.php");//faz o redirecionamento para a página de login
		}
		echo "Olá ".$_SESSION['nome'].", seja bem vindo<br>";
		echo "<h2> ..: Marcação de Férias :.. </h2>";
	?>
		<form action="" method="post">
			<label>Inicio:</label>
			<input type="date" name="initferias" placeholder="">
			<br/>
			<br/>
			<label>Fim: </label>
			<input type="date" name="endferias" placeholder="">
			<br/>
			<br/>
			<input type="submit" name="btnLogin" value="Enviar">
		</form>
		<br/><br/>
		<form action="sair.php" method="post">
			<input type="submit" name="btsair" value="Sair">
		</form>
</body>
</html>