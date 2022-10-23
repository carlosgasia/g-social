<?php
 	$destino="administracion@g-social.com,g.social.vzla@gmail.com";
 
	 $nombreCompleto= $_POST["nombreCompleto"];
	 $rif= $_POST["rif"];
	 $tipoOrganizacion= $_POST["tipoOrganizacion"];
	 $mision= $_POST["mision"];
	 $direccion1= $_POST["direccion1"];
	 $direccionLocal= $_POST["direccionLocal2"];
	 $ciudadForm= $_POST["ciudadForm"];
	 $estadoForm= $_POST["estadoForm"];
	 $emailForm= $_POST["emailForm"];
	 $telefono= $_POST["telefono"];
	 $igform= $_POST["igform"];
	 $areaDImpacto= $_POST["areaDImpacto"];
	 $oAreainteres= $_POST["oAreainteres"];	
	 $ProgramaRquerido= $_POST["ProgramaRquerido"];
	 $pContacto= $_POST["pContacto"];
	 $Ncontacto= $_POST["Ncontacto"];
	 

	
	$contenido = "Nombre Completo: " . $nombreCompleto . "\nRif: " . $rif . 
				  "\nTipo de organización: " . $tipoOrganizacion . "\nMisión: " . $mision . 
				  "\nDirección (línea 2): " . $direccion1 . "\nDirección (línea 2): " . $direccionLocal . 
				   "\n" . $direccionLocal2 . "\nCiudad: " . $ciudadForm . 
					"\nEstado: " . $estadoForm . "\nRed Social: " . $igform . "\nCorreo: " . $emailForm . 
					 "\nÁrea de impacto: " . $areaDImpacto . "\nOtra área de impacto: " . $oAreainteres . 
					"\nProgramas sociales activos que requieran trabajo voluntario: " . $ProgramaRquerido . "\nNombre de persona para contacto: " . $pContacto . "\nNúmero de contacto: " . $Ncontacto;

 	mail($destino,"Formulario-Voluntarios", $contenido);
 	
 	header("location:gracias.html");

?>