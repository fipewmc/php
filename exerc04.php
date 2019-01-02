<?php
	/*
		Exercicio sobre variaveis pré-definidas
		Também conhecidas por array super globais
	*/
	$nome = (int)$_GET["a"]; //array superglobal valor recebido através da URL, com conversão para inteiro
	var_dump($nome);

	echo "<br/><br/>";

	$ip = $_SERVER["REMOTE_ADDR"];//Permite verificar o IP do cliente

	echo "o IP do cliente é:&#09 $ip";	

	echo"</br><br/>";

	$nomeScript = $_SERVER["SCRIPT_NAME"];//permite ober o nome do ficheiro que está a ser acedido

	echo "O nome do ficheiro que foi acedido é: $nomeScript";
?>