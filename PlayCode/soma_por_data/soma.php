<?php
// Jogue os dados num arquivo:
$handle = file_get_contents('dados.json');

$json_array = json_decode($handle, true);

$data_da_soma = '2017-02-01'; // essa é a nossa variável de controle
$total_soma = 0.0;

foreach ($json_array as $item) {
    if($item['DATA'] == $data_da_soma){
        $total_soma += $item['VALOR'];
    }
}

echo "O total da soma foi: " . $total_soma;
