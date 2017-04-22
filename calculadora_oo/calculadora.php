<?php
/*
Uma classe tem o objetivo de abstrair o código das operações
que você executa no código, então, normalmente não se atribuem valores
diretamente na classe, a menos que necessário.

No caso, a variável $result precisa de um dado atribuído por nós e inicializado
para verificação posterior.

*/


class Calculadora {

	public $a;
	public $b;
	public $operacao;
	public $result = null;

	/*
	 Método construtor para passar à nossa classe
	 todas as informações e ela se encarregará de realizar
	 os cálculos

	*/

	public function __construct($num1, $num2){
		$this->a = $num1;
		$this->b = $num2;

	}

	public function somar() {
		return $this->a + $this->b;
	}
	public function subtrair() {
		return $this->a - $this->b;
	}
	public function multiplicar() {
		return $this->a * $this->b;
	}
	public function dividir() {
		return $this->a / $this->b;
	}

	/*
	Toda a tarefa de calcular deve ser dada à calculadora,
	portanto, criamos um método calcular
	*/ 
	public function calcular($operacao) {

		switch ($operacao) {
			case 'somar': 
				// Normalmente não se instancia uma classe dentro dela mesma!
				
				/*
				$this, para acessar o próprio atributo.
				O mesmo vale para os métodos
				*/
				$this->result = $this->somar();
				break;

			case 'subtrair':
				
				$this->result = $this->subtrair();		
				break;

			case 'multiplicar':
				
				$this->result = $this->multiplicar();	
				break;

			case 'dividir':
				if($this->b == 0) {
					echo "Não é possível dividir por zero!";
					echo "<br/>";
					echo "<a href='index.html'>Voltar</a>";
					exit();
				}
				
				$this->result = $this->dividir();		
				break;
			
			default:
				echo "Escolha uma das operações!";
				echo "<br/>";
				echo "<a href='index.html'>Voltar</a>";
		}

		if($this->result !== null) {
			echo "O resultado é: ".$this->result;
			echo "<br/>";
			echo "<a href='index.html'>Voltar</a>";
		}
	}
}
