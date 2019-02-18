# verifica a última ocorrência de um char em uma string

<?php
$frase = '01234.6789.textosque_nao_importam';

# Encontra o último '.' na string
$posicao = strrpos($frase, '.');
var_dump($posicao);

echo '<br>';
# Fatia a string a partir do início até o ponto
echo substr($frase, 0, $posicao);

