<?php 
	// Puede ingresar al sitio si el usuario es mayor de 18

	echo "SITIO WEB <hr>";

	$edadUsuario = 18;

	// Edad permitida
	define("EDAD_PERMITIDA", 18);

	$condIngresarSitio = $edadUsuario >= EDAD_PERMITIDA;

	if($condIngresarSitio == true){
		echo "Usuario habilitado para ingresar.";
	} else {
		echo "Usuario NO habilitado para ingresar.";
	}

?>