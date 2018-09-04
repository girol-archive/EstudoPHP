<?php
/*
Mock para demonstrar o operador de resolução de escopo '::'
*/


class Lutador {

    public function __construct()
    {
        echo "Hadoouken";
    
    }
}

$ryu = new Lutador;

# Busca o nome completo da classe
$ken = Lutador::class;

echo '<hr>';
echo 'O conteúdo de $ken é: '. $ken;

echo '<hr>';
echo "Instanciando Akuma:";
$akuma = new $ken;

echo '<hr>';
$lutador_str = 'Lutador';
echo "Instanciando Dark Ryu por string:";
$dark_ryu = new $lutador_str;
