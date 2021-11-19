<?php
 
include("con_db.php");
 
if(isset($_POST['login'])){

    // 3. Variables $_POST[]
    $user = trim($_POST['usuario']);
    $pass = trim($_POST['password']); // La función MD5() estará encriptando lo ingresado para comparar con lo guardado

    
    // 4. Cadena de SQL
    $sql = "SELECT * FROM usuarios WHERE Nom_Usuario = '$user' AND calve = '$pass'";
    // 5. Ejecuto cadena query()
    if(!$consulta = $conex->query($sql)){
        ?>
		<h1>ERROR: no se pudo ejecutar la consulta!</h1>;
		<?php
        }else{            
                ?>
	   	<h3 >¡Te has inscripto correctamente!</h3>
        <?php
            
		}
}        

 
?>