<?php
	// Area del circulo
	$radio = 5;
	$pi    = pi();
	$circulo  = 0;

	// Calcular
	$circulo = 2 * $pi * ($radio * $radio);

	echo "Resultado del area del circulo: " . $circulo . "<hr>";

	// Area del triangulo
	$base   = 5;
	$altura = 5;
	$triangulo = $base * $altura / 2;

	echo "Resultado del area del triangulo: " . $triangulo . "<hr>";
?>