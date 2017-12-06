<?php

var_dump($_POST);

if(empty($_POST['teste'])){
	echo "A variável está vazia...";
	var_dump($_POST['teste']);
}

echo "<br/><br/>";
echo "<a href='index.html'>Voltar</a>";
exit;
