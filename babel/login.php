<!doctype html>

<html lang="es">
    <head>        
        <meta charset="utf-8">
        <meta name="viewport" content="user-scalable=no, width=device-width, initial-scale=1">

        <title> Ingresar </title>    
        
        <link href="https://fonts.googleapis.com/css?family=Nunito&display=swap" rel="stylesheet"> 
        <link href="https://fonts.googleapis.com/css?family=Overpass&display=swap" rel="stylesheet">        
        <link rel="stylesheet" href="css/login.css">
        
        <style type="text/css"></style>        
        <script type="text/javascript"></script>
        
        <link rel="shortcut icon" href="images/Babel_ico.png"/>
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" 
		integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
		
		<meta name="keywords" content="Libro,Libros,Biblioteca,Virtual,Babel,Ingresar,Login">
		<meta name="description" content="Login a biblioteca babel">
		<meta http-equiv="refresh" content="100">

        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    	<link rel="stylesheet" href="iconosredes.css">
    </head>
    
    <body background="images/antibiblioteca.jpg">	
        <div id="contenedor">
            <div id="central">
                <div id="login">
                    <div class="titulo">
						<h4>Bienvenido</h4>
                    </div>
					
                    <form id="loginform" method="post" action="index.html">
                        <input type="text" name="usuario" placeholder="Usuario" required>
                        
                        <input type="password" name="password" placeholder="Contraseña"required>
                        
                        <input type="submit" name="ingresar" value="Ingresar"></input>
                    </form>
					
					 <?php
					
					include("select.php");
					?>
					 
					<br></br>
					<br></br>
					<br></br>
                    <div class="pie-form">
                        <a href="#">¿Olvidaste tu contraseña?</a>
                        <a href="registro.html">Registrate</a>
                        <br>    
                        <a href="index.html">Volver</a>
						
                    </div>					
                </div>       
            </div>
        </div>
		
        <footer> <h6>
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