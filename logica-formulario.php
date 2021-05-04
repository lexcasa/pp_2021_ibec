<?php 
	echo "SITIO WEB <hr>";

	define("EDAD_PERMITIDA", 18);

	$edad = 18;
	$esCasado = true;

	$esMayor  = $edad >= EDAD_PERMITIDA;
	$altaForm = $esMayor && $esCasado;

	if ($altaForm == true) {
		echo "ALTA FORMULARIO - EXITO";
	} else {
		echo "ERROR AL INGRESAR FORMULARIO";
	}
?>