<?php

$x = TRUE;

var_dump($x);

echo "<hr>";


session_start();

$_SESSION['login'] = TRUE;

var_dump($_SESSION);

