<!doctype html>

<html lang="es">
    
    <head>
        
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">

        <title> Registrarse </title>		
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">
        
        <link rel="stylesheet" href="css/login.css">
        
        <style type="text/css">
            
        </style>
        
        <link rel="shortcut icon" href="images/Babel_ico.png"/>

        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" href="iconosredes.css">
    </head>
    
    <body background="images/antibiblioteca.jpg">
               
					 
		<script src="js/funcionesGrupo99.js"></script>
		<div id="contenedor">
			<div id="central">
				<div id="login">
					<div class="titulo">
						<h4>REGISTRARSE</h4>
					</div>
	
					<form method="post" onsubmit="return validar()">
						<div>
							<label for="usuario">Nombre de Usuario</label>
							<input type="text" name="usuario" id="usuario" placeholder="Nombre de Usuario" required/>
						</div>
						<div>
							<label for="nombre">Nombre</label>
							<input type="text" name="nombre" id="nombre" placeholder="nombre" required/>
						</div>
						<div>
							<label for="apellido">Apellido</label>
							<input type="text" name="apellido" id="apellido" placeholder="Apellido" required/>
						</div>
						<div>
							<label for="nacimiento">Fecha de Nacimiento</label>
							<input type="text" name="nacimiento" id="nacimiento" placeholder="Fecha de Nacimiento" required/>
						</div>
						<div>
							<label for="provincia">Provincia</label>
							<input type="text" name="provincia" id="provincia" placeholder="Provincia" required/>
						</div>
						<div>
							<label for="pais">País</label>
							<input type="text" name="pais" id="pais" placeholder="País" required/>
						</div>
						<div>
							<label for="password">Password</label>
							<input type="password" name="password" id="password" placeholder="Contraseña" required/>
						</div>
						<div>
							<label for="password2">Repetir Password</label>
							<input type="password"  name="password2" id="password2" placeholder="Contraseña" required/>
						</div>
						<div>
							<label for="email" >Correo Electrónico</label>
							<input type="email" name="correo" id="correo" placeholder="Mail" required/>
						</div>		
		
						<input type="submit" name="registrar" value="Registrar"></input>
						<br>
						<br>
						<div class="inferior">
							<a href="login.html">Volver</a>
						</div>
					</form>
					<?php
					
					include("registrar.php");
					?>
				</div>
			</div>
		</div>  

		<footer><h6>
            <p class="text-center">Copyright &copy; Babel.com</p>
            <div class="buttons">
                <a href="https://www.facebook.com/babelpopular" class="fa fa-facebook" target="_blank"></a>&nbsp;&nbsp;
                <a href="https://www.google.com/?hl=es" class="fa fa-google-plus" target="_blank"></a>&nbsp;&nbsp;
                <a href="https://www.youtube.com/watch?v=sZJcaXwuRbM&t=3s" class="fa fa-youtube" target="_blank"></a>
            </div>
			</h6>
		</footer>

    </body>
</html>