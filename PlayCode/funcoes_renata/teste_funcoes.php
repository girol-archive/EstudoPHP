<?php


class Heroi {
    //atributos - o que o herói tem
    public $nome = "";
    public $vida;

    public function __construct($hero_name, $hero_vida){
        $this->nome = $hero_name;
        $this->vida = $hero_vida;
    }

    // o que o herói faz
    //public function poder($poderes = ['chute','soco','pulo']){
    public function poder($poderes = array()){
            // Vamo soltá ozpoder
            // foreach($poderes as $poder):
            //     echo "Soltou: ". $poder;
            //     echo "<br>";
            // endforeach;
    }
}
// Instanciando a classe
$heroi = new Heroi("blanka",1400);
//$powers = ['chokin','bolinha avuano','chute na beiça'];

$heroi->poder(); //não precisa
echo "<hr>";

// MOTOR DA FUNÇÃO ->>> $poderes = 3

var_dump($heroi);

// Acessando dentro do objeto
echo $heroi->nome;
echo "<hr>";

echo $heroi->vida; // precisa
echo "<hr>";


//===========================
// ESCOPO
//===========================

// RUN

$poderes = ['haduki','kamehameha','sonic boom','spinning bird kick'];
//poder($poderes);
