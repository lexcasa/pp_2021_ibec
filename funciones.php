<?php 

	// Funcion SUMA de dos numeros
	// f(a, b) = a + b
	// a = 1, b = 2
	// f(1, 2) = 1 + 2 = 3
	function suma($a, $b){
		return $a + $b;
	}

	function resta($a, $b){
		return $a - $b;
	}

	$resultado 	= suma(1, 2);
	$resultado2 = resta(2, 2);

	function muestraResultado ($res1, $res2){
		echo "Resultado de la suma es: " . $res1 . "<hr>";
		echo "Resultado de la resta es: " . $res2 . "<hr>";
	}
	// Ejecuto la funcion
	muestraResultado($resultado, $resultado2);
?>