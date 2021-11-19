<?php

include("con_db.php");

if (isset($_POST['registrar'])) {
    $user = trim($_POST['usuario']);
	$nombre = trim($_POST['nombre']);
	$apellido = trim($_POST['apellido']);
	$fecha = trim($_POST['nacimiento']);
	$provincia = trim($_POST['provincia']);
	$pais = trim($_POST['pais']);
	$pass = trim($_POST['password']);
	$pass2 = trim($_POST['password2']);
	$mail = trim($_POST['correo']);
	
	$consulta = "INSERT INTO usuarios(Nom_Usuario, Nom_Nom, Ape_Usuario, Mail_Usuario, Fec_Nacimiento, Prov_Usuario, Pais_Usuario, Clave_Usuario)
	VALUES ('$user','$nombre','$apellido','$mail','$fecha','$provincia','$pais','$pass')";
	$resultado = mysqli_query($conex,$consulta);
	if ($resultado) {
	  	?>
	   	<h3 class="ok">¡Te has inscripto correctamente!</h3>
        <?php
	} else {
	   	?>
	  	<h3 class="bad">¡Ups ha ocurrido un error!</h3>
        <?php
	}
}

?>