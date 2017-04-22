<?php
	require "calculadora.php";

	$a = $_GET["a"];
	$b = $_GET["b"];
	$operacao =  $_GET["operacao"];

	/*
	Instancia a nossa classe, carregando tudo
	o que programamos em calculadora.php
	na variável $calc
	*/ 
	$calc = new Calculadora($a,$b);

	$calc->calcular($operacao);
