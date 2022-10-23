<?php
 	$destino="administracion@g-social.com,g.social.vzla@gmail.com";
 
	 $nombreCompleto= $_POST["nombreCompleto"];
	 $Cedula= $_POST["Cedula"];
	 $fnacimiento= $_POST["fnacimiento"];
	 $typesex= $_POST["typesex"];
	 $numeroDtelefono= $_POST["numeroDtelefono"];
	 $direccionLocal= $_POST["direccionLocal"];
	 $direccionLocal2= $_POST["direccionLocal2"];
	 $ciudadForm= $_POST["ciudadForm"];
	 $estadoForm= $_POST["estadoForm"];
	 $igform= $_POST["igform"];
	 $emailForm= $_POST["emailForm"];
	 $op_interes= $_POST["op_interes"];
	 $op_interes2= $_POST["op_interes2"];
	 $op_interes3= $_POST["op_interes3"];
	 $otraInteres= $_POST["otraInteres"];
	 $habilidades1= $_POST["habilidades1"];
	 $habilidades2= $_POST["habilidades2"];
	 $habilidades3= $_POST["habilidades3"];
	 $Ohabilidad= $_POST["Ohabilidad"];
	 $entrenamientoRequerido= $_POST["entrenamientoRequerido"];
	 $Pvoluntario= $_POST["Pvoluntario"];
	 $Dvoluntario= $_POST["Dvoluntario"];
	 $HorasVoluntario= $_POST["HorasVoluntario"];
	 $FinesDsemana= $_POST["FinesDsemana"];
	 $Horas= $_POST["Horas"];

	
	$contenido = "Nombre Completo: " . $nombreCompleto . "\nCédula: " . $Cedula . 
				  "\nFecha de nacimiento: " . $fnacimiento . "\nSexo: " . $typesex . 
				  "\nNúmero telefónico: " . $numeroDtelefono . "\nDirección (línea 1): " . $direccionLocal . 
				   "\nDirección (línea 2): " . $direccionLocal2 . "\nCiudad: " . $ciudadForm . 
					"\nEstado: " . $estadoForm . "\nRed Social: " . $igform . "\nCorreo: " . $emailForm . 
					"\nInterés (1): " . $op_interes . "\nInterés (2): " . $op_interes2 . "\nInterés (3): " . $op_interes3 . 
					"\nOtro interés: " . $otraInteres . "\nHabilidad (1): " . $habilidades1 . "\nHabilidad (2): " . $habilidades2 . 
					"\nHabilidad (3): " . $habilidades3 . "\nOtra habilidad: " . $Ohabilidad . "\n¿Ha tenido experiencia como voluntario? : " . $entrenamientoRequerido . 
					"\n¿Por qué quiere ser voluntario? : " . $Pvoluntario .  
					"\nDías disponibles: " . $Dvoluntario . "\nHoras disponibles: " . $HorasVoluntario . 
					"\nFines de semana: " . $FinesDsemana . "\nHoras: " . $Horas;


 	mail($destino,"Formulario-Voluntarios", $contenido);
 	
 	header("location:gracias.html");

?>