<?php
session_start(); //inicio de sessão
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>

<body>
	<!--Inicio de bloco de código em PHP -->
	<?php
	echo "Olá, seja bem vindo<br>";
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
</body>
</html>