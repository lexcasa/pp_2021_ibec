<?php
	
	/*
		Verificar si un usuario puede viajar a USA teniendo en cuenta si:
		
		- Esta vacunado
		- Tiene pasaporte
		- Es mayor de edad (Asumimos que es mayor o igual a 18)

		Si el usuario cumple con todas las condiciones en simultaneo que despliegue
		el resultado: 
			"USUARIO PUEDE VIAJAR"

		Caso contrario
			"USUARIO NO PUEDE VIAJAR"
	*/
	define("MAYOR_EDAD", 18);

	$estaVacunado 		= true;
	$tienePasaporte 	= true;
	$edad 				= 19;

	$esMayor 			= $edad >= MAYOR_EDAD; // Nos va a dar true/false

	$habilitado 		= $estaVacunado && $tienePasaporte && $esMayor; // Nos va a dar true/false

	// OR: || 
	
	if($habilitado == true){
		echo "USUARIO PUEDE VIAJAR";
		// MAS CODIGO
	} else {
		echo "USUARIO NO PUEDE VIAJAR";
		// MAS CODIGO 
	}
?>