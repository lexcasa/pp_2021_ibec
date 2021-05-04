<?php 
	echo "SITIO WEB <hr>";

	$tienePasaporte = true;
	$tieneCedula 	= true;

	$pasaje = true;
	$viaje  = true;

	$condDocumento = $tieneCedula || $tienePasaporte;

	$condPuedoViajar = $condDocumento && $pasaje && $viaje;

	if($condPuedoViajar == true){
		echo "El usuario puede viajar";
	} else {
		echo "El usuario NO puede viajar";
	}
?>