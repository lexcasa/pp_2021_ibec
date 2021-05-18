<?php  
	// 
	$arr = array("Alex", "Casadevall", "29");
	// Posiciones, numericas
	// $arr[0] --> 1
	// $arr[1] --> "alex"
	// $arr[2] --> 2
	// .. 
	// $arr[4] --> "pepe"

	$largo = count($arr);

	for ($i=0; $i < $largo; $i++) { 
		// echo $arr[$i] . "<hr>";
	}

	// Persona de un sistema
	$arrKey = array(
				"nombre" => "Alex", 
				"apellido" => "Casadevall",
				"edad" 	=> 29
			);

	foreach ($arrKey as $key => $value) {
		// echo $key . ": " . $value . "<hr>";
	}

	// Matriz 
	$matriz = array( array(1, 2), array(1, 3) );

	for ($i=0; $i < count($matriz) ; $i++) { 
		
		// echo "Vector: " . $i . "<hr>";

		for ($j=0; $j < count($matriz[$i]) ; $j++) { 
			// echo "SubVector: " . $matriz[$i][$j] . "<hr>";
		}
	}

	// var_dump($matriz);

	// Personas
	$personas = array(
		array(
			"nombre" => "Alex", 
			"apellido" => "Casadevall",
			"edad" 	=> 29
		),
		array(
			"nombre" => "Juan", 
			"apellido" => "Casadevall",
			"edad" 	=> 26
		),
		array(
			"nombre" => "Mateo", 
			"apellido" => "Casadevall",
			"edad" 	=> 29
		)
	);

	var_dump($personas);

?>