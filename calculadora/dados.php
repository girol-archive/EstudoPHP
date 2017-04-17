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

			// Switch também suporta ifs! ;)
			if($b == 0){
				echo "Não é possível divisão por zero!";
				echo "<br/>";
				echo "<a href='index.html'>Voltar</a>";
				exit();
			}

			$result = $a / $b;
			break;
		
		default:
			echo "Escolha uma das operações";
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
			// default não tem break
	}

	/*
	Não é necessário repetir o código várias vezes. 
	A variável $result já está sendo inicializada em cada parte do switch
	Daí basta mostrá-la uma vez.

	No entanto, se o usuário não escolher nenhuma opção, essa linha
	ainda é mostrada. Resolvemos com um if
	*/ 

	if($result !== null){ // A importância do null neste caso!

		echo "O resultado é: ".$result;
		echo "<br/>";
		echo "<a href='index.html'>Voltar</a>";
	}
