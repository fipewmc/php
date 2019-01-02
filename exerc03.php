<?php

//exercicio sobre variaveis

$nomeCompleto = "Manuel das Couves";

	unset($nomeCompleto);//o unset limpa o valor da variavel nomeCompleto

	if (isset($nomeCompleto))//verifica se a variável está definida
		echo "$nomeCompleto";

	//concatenação
	$nome = "Filipe";
	$sobreNome = "Gaspar";
	echo "<pre><br/>A variavel nome tem o valor de:&#09&#09 $nome<br/>";
	echo"<br/>A variavel sobrenome tem o valor de:&#09 $sobreNome <br>";
	$nomeCompleto= $nome . " " . $sobreNome;//concatenação 
	echo "<br/>concatenadas ficam com o valor de:&#09 $nomeCompleto!</pre>";


	//tipos básicos de variavies
	$nome = "Hcode";
	$site = 'www.hcode.com.br';	
	$ano = 1990;
	$salario = 600.20;
	$bloqueado = false;

	// tipos de variaveis compostos
	$frutas = array("abacaxi","laranja","manga");
	echo "$frutas[2]<br/><br/>";
	$nascimento = new DateTime();//Criação de Objecto 
 	var_dump($nascimento);

 	echo"<br/><br/>";
 	echo"<br/><br/>";

 	//tipos especiais de variaveis
 	$arquivo = fopen("exerc03.php", "r");
 	var_dump($arquivo);
 	echo"<br/><br/>";
 	// variavel Null
 	$nulo = Null; //não existe 

 		
	// comentário de uma linha
	
	/*
		Comentário 
		para várias linhas ou bloco
	*/
?>