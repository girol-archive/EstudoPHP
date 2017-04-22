<?php
class Calculadora {

	public $a = $_GET["a"];
	public $b = $_GET["b"];
	public $operacao =  $_GET["operacao"];
	public $result = null;

	public function somar($a, $b) {
		return $a + $b;
	}
	public function subtrair($a, $b) {
		return $a - $b;
	}
	public function multiplicar($a, $b) {
		return $a * $b;
	}
	public function dividir($a, $b) {
		return $a / $b;
	}
}

	switch ($operacao) {
		case 'somar': 
			$result = new Calculadora();
			$result->somar($a, $b);
			break;

		case 'subtrair':
			$result = new Calculadora();
			$result->subtrair($a, $b);		
			break;

		case 'multiplicar':
			$result = new Calculadora();
			$result->multiplicar($a, $b);	
			break;

		case 'dividir':
			if($b == 0) {
				echo "Não é possível dividir por zero!";
				echo "<br/>";
				echo "<a href='index.html'>Voltar</a>";
				exit();
			}
			$result = new Calculadora();
			$result->dividir($a, $b);		
			break;
		
		default:
			echo "Escolha uma das operações!";
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
	}

	if($result !== null) {
		echo "O resultado é: ".$result;
		echo "<br/>";
		echo "<a href='index.html'>Voltar</a>";
	}
