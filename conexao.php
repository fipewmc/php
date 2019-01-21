<?php
	$servidor = "www.udemy.hcode.php"; //Servidor de base de dados neste exemplo está no IP 192.168.100.15 
	$utilizador = "admin"; //para testes
	$senha = " "; //para testes neste abiente não tem password
	$dbname = "abc"; //para testes

	//criação da coneção á base de dados
	$conn = mysqli_connect($servidor, $utilizador, $senha, $dbname);//conector para a base de dados
?>