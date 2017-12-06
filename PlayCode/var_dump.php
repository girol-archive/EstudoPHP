<?php
# Configuração de session para poder formatar o formulário de pedido da oficina

$array['fun_id']			= '24';
$array['num_usp'] 		= '6988222';
$array['nome']    		= 'André Luiz Girol';
$array['ramal'] 			= '0077';
$array['email']			= 'girol@email.com';
$array['tipo_oficina']	= '0';
$array['oficina_destino']	= '1';

var_dump($array);

echo $my;

echo date('d/m/Y H:m:s');

echo ini_get('date.timezone') . "<br>";


echo date_default_timezone_get();

?>
