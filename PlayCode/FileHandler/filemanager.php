<?php

// Alterando Header padrao para HTML
header('Content-Type: text/plain; charset=utf-8');

// Arquivo para ler
$file = "apache.conf";

// Abre o arquivo em um ponteiro
$file_handler = fopen($file, 'r');

// Percorre o arquivo
while (!feof($file_handler)):
    $linha = fgets($file_handler);
    
    if (strpos($linha, 'ServerAdmin') !== FALSE):
        echo $linha;
    endif;

endwhile;

fclose($file_handler);
