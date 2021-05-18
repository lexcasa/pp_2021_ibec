<?php

	// Crear un programa que verifique si la edad de la persona es mayor a 23 años
	define("MAYOR_EDAD", 23);

	$edad = 23;

	if($edad >=  MAYOR_EDAD){
		echo "USUARIO HABILITADO";
	} else {
		echo "USUARIO NO HABILITADO";
	}
?>