<?php
	$servidor = "www.udemy.hcode.php"; //Servidor de base de dados neste exemplo 
	$utilizador = "admin"; //para testes
	$senha = ""; //para testes neste abiente não tem password
	$dbname = "teste"; //para testes

	//criação da coneção á base de dados
	$connect = mysqli_connect($servidor, $utilizador, $senha, $dbname);//conector para a base de dados	
	
	if(mysqli_connect_error()){
		echo "Falha na conexão: ".mysqli_connect_error();
	}
?>