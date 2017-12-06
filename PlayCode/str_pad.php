<?php

// Alterando Header padrao para HTML
header('Content-Type: text/html; charset=utf-8');

for ($i = 1; $i <= 10   ; $i++):
    echo str_pad($i, 2, 0 , STR_PAD_RIGHT). "<br>";
endfor;

echo "<hr>";

echo str_repeat("Hello World!<br>", 5);

echo "<hr>";

echo substr('Hadouken', 0 , 4);

$position = strpos('Hadouken', 'k');

var_dump($position);

echo "<hr>";

// Procurando uma extensão de arquvivo

$file = "meu arquivo.furfles";

$ext = substr($file, strrpos($file, '.'));

echo $ext;
