<?php

	$a = $_GET["a"];
	$b = $_GET["b"];
	$operacao =  $_GET["operacao"];
	$result = null;


	if($operacao == "somar") {
		
		$result = $a + $b;

	} else if($operacao == "subtrair") {

		$result = $a - $b;

	} else if($operacao == "multiplicar") {

		$result = $a * $b;

	// Aqui não precisa testar de novo, visto que só
	} else if($operacao == "dividir") {

		if($b == 0){
			echo "Não é possível dividir por zero!<br>";
			echo "<a href='index.html'>Voltar</a>";
			exit();//encerra o script imediatamente
		}

		$result = $a / $b;

	// Caso o usuário não escolha nada, mostra mensagem de erro
	} else {
		
		echo "Escolha uma das operações";
		echo "<br>";
		echo "<a href='index.html'>Voltar</a>";
		exit();//encerra o script imediatamente
	}

	echo "O resultado é: ". $result;
	echo "<br>";
	echo "<a href='index.html'>Calcular novamente</a>";

