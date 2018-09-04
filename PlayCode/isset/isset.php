<?php

var_dump($_POST);

if(empty($_POST['teste'])){
	echo "A variável está vazia...";
	var_dump($_POST['teste']);
}

if (isset($_POST['teste'])){
    echo "A variável está setada...";
	var_dump($_POST['teste']);
}

echo "<br/><br/>";
echo "<a href='index.html'>Voltar</a>";
echo "<hr>";
echo "Testando empty sem existir";

if(empty($olar)){
    echo "tá vazia e não chamada em lugar algum";
    var_dump($olar);
}

exit;
