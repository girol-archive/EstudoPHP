<?php

	$a = $_GET["a"];
	$b = $_GET["b"];
	$operacao =  $_GET["operacao"];
	$result = null;

	switch ($operacao) {
		case 'somar':
			$result = $a + $b;
			break;

		case 'subtrair':
			$result = $a - $b;
			break;

		case 'multiplicar':
			$result = $a * $b;
			break;

		case 'dividir':
			$result = $a / $b;
			break;
		
		default:
			echo "Escolha uma das operações";
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
			break;
	}

	/*
	Não é necessário repetir o código várias vezes. 
	A variável $result já está sendo inicializada em cada parte do switch
	Daí basta mostrá-la uma vez.
	*/ 
	echo "O resultado é: ".$result;
	echo "<br/>";
	echo "<a href='index.html'>Voltar</a>";
