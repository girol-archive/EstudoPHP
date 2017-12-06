<?php

// Alterando Header padrao para HTML
header('Content-Type: text/html; charset=utf-8');

$arrB = ["Ryu ", "Ken ", "Chun Li ", "Blanka "];

var_dump($arrB);

array_push($arrB, "Vega");

var_dump($arrB);

array_pop($arrB);

var_dump($arrB);

echo "<hr>";

var_dump(array_keys($arrB));

$exploded = explode(", ", "Ryu , Ken , Chun Li, Blanka");

var_dump($exploded);