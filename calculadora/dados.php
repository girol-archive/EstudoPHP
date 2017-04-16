<?php

	$a = $_GET["a"];
	$b = $_GET["b"];
	$operacao =  $_GET["operacao"];
	$result = [];

	if($operacao == "Somar") {
		$result = $a + $b;
	} else if($operacao == "Subtrair") {
		$result = $a - $b;
	} else if($operacao == "Multiplicar") {
		$result = $a * $b;
	} else($operacao == "Dividir") {
		$result = $a / $b;
	}

	echo "O resultado é: ".$result;
?>