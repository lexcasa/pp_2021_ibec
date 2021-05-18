<?php
	
	// Condicion
	// No calcular areas con radio mayor a 10
	function areaCirculo($r){
		$pi = pi();
		if($r > 10){
			return "Error: radio no permitido";
		}
		return 2 * $pi * ($r**2); 
	}

	function areaTriangulo($b,$h){
		return ($b * $h) / 2; 
	}

	function imprimeResultado ($tipo, $valor){
		echo ":: Resultado del area del [".$tipo."]: " . $valor . "<hr>";
	}

	$r = 5;
	$circulo = areaCirculo($r);

	imprimeResultado("circulo", $circulo);

	$base   = 5;
	$altura = 12;
	$triangulo = areaTriangulo($base, $altura);

	imprimeResultado("triangulo", $triangulo);
?>