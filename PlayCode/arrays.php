<?php

// Alterando Header padrao para HTML
header('Content-Type: text/html; charset=utf-8');

$arr = [
    "indice1" => "Ryu",
    "indice2" => "Ken",
    "indice3" => "Chun Li",
    "indice4" => "Blanka"
];

var_dump($arr);

echo "<hr>";
echo "Substituindo... <br>";

//$arr[2] = "Bison";

var_dump($arr);

echo "<hr>";

echo "Executando array_map";

$arrB = ["Ryu ", "Ken ", "Chun Li ", "Blanka "];

$arrB = array_map('trim', $arrB);

var_dump($arrB);

echo "<hr>";
echo "Executando array_pad";

//$arrB = array_pad($arrB , -5 , 4);

var_dump($arrB);

echo "<hr>";

echo "Adicionando dados falsos para array_filter";
$arrB[] = null;
$arrB[] = FALSE;

var_dump($arrB);

echo "Aplicando array_filter";
$arrB = array_filter($arrB);

var_dump($arrB);
