<?php

	$a = $_GET["a"];
	$b = $_GET["b"];
	$operacao =  $_GET["operacao"];
	$result = null;

	switch ($operacao) {
		case 'somar':
			$result = $a + $b;
			echo "O resultado é: ".$result;
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
			break;

		case 'subtrair':
			$result = $a - $b;
			echo "O resultado é: ".$result;
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
			break;

		case 'multiplicar':
			$result = $a * $b;
			echo "O resultado é: ".$result;
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
			break;

		case 'dividir':
			$result = $a / $b;
			echo "O resultado é: ".$result;
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
			break;
		
		default:
			echo "Escolha uma das operações";
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
			break;
	}
?>
