<?php
	 $destino="administracion@g-social.com,g.social.vzla@gmail.com";
	 $nombreOrganizacion = $_POST["nombreOrganizacion"];
	 $rifOrganizacion = $_POST["rifOrganizacion"];
		$programaRequerido = $_POST["programaRequerido"];
		$tipoTrabajo=$_POST["tipoTrabajo"];
		$perfilVoluntario=$_POST["perfilVoluntario"];
		$cantidadVoluntarios=$_POST["cantidadVoluntarios"];
		$lugarTrabajo=$_POST["lugarTrabajo"];
		$horarioTrabajo=$_POST["horarioTrabajo"];
		$fechaRequerida=$_POST["fechaRequerida"];
		$beneficioConsiderado=$_POST["beneficioConsiderado"];
		$entrenamientoEspecial=$_POST["entrenamientoEspecial"];
		$entrenador=$_POST["entrenador"];
		$entrenamiento = $_POST["entrenamiento"];
		$nameContacto = $_POST["nameContacto"];
		$numContacto = $_POST["numContacto"];

		$contenido= "Nombre de organización: " . $nombreOrganizacion . "\nRIF:" . $rifOrganizacion . "\nPrograma para el cual se requiere el voluntario: " . $programaRequerido . "\nTipo de trabajo para el cual se solicita el voluntario: " . $tipoTrabajo . "\nPerfil del voluntario requerido: " . $perfilVoluntario . "\nCantidad de voluntarios requeridos: " . $cantidadVoluntarios . "\nLugar donde se realizara el trabajo: " . $lugarTrabajo . "\nHorario: " . $horarioTrabajo . "\n¿A partir de qué fecha es requerido? : " . $fechaRequerida . 
		"\n¿Esta considerado algún beneficio para el voluntario? : " . $beneficioConsiderado . "\n¿Requiere algún entrenamiento especial para hacer la tarea que le corresponde? : " . $entrenamientoEspecial . "\n¿Cuenta la organización con la persona que entrene al voluntario? : " . $entrenador . "\n¿Necesita el servicio de entrenamiento para el voluntario? : " . $entrenamiento . "\nNombre de persona para contacto: " . $nameContacto . "\nNúmero de teléfono de persona para contacto: " . $numContacto;

 	mail($destino,"Formulario-Requerimiento de voluntarios", $contenido);
 	
 	header("location:gracias.html");

?>