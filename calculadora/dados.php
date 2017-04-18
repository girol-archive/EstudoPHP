<?php

	$a = $_GET["a"];
	$b = $_GET["b"];
	$operacao =  $_GET["operacao"];
	$result = null;


	function somar($a, $b) {
		return $a + $b;
	}

	function subtrair($a, $b) {
		return $a - $b;
	}

	function multiplicar($a, $b) {
		return $a * $b;
	}
	function dividir($a, $b) {
		return $a / $b;
	}


	/*
	Toda função que RETORNA UM VALOR
	deve ser coletada por outra variável
	ou outra função	
	*/
	switch ($operacao) {
		case 'somar': 
			/*
			Você tinha feito a soma,
			mas não tinha armazenado o valor
			*/
			$result = somar($a, $b);
			break;

		case 'subtrair':
			$result = subtrair($a, $b);			
			break;

		case 'multiplicar':
			$result = multiplicar($a, $b);		
			break;

		case 'dividir':
			if($b == 0) {
				echo "Não é possível dividir por zero!";
				echo "<br/>";
				echo "<a href='index.html'>Voltar</a>";
				exit();
			}
			$result = dividir($a, $b);			
			break;
		
		default:
			echo "Escolha uma das operações!";
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
	}

	//if($result !== null) { //com o if não aparece retorno
		echo "O resultado é: ".$result;
		echo "<br/>";
		echo "<a href='index.html'>Voltar</a>";
	//}

