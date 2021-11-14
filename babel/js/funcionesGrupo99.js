//funcion para validar los campos
function validar(){	
	var usuario, nombre, apellido, nacimiento, provincia, pais, pass, pass2, correo, expresion;
	usuario = document.getElementById("usuario").value;
	nombre = document.getElementById("nombre").value;
	apellido = document.getElementById("apellido").value;
	nacimiento = document.getElementById("nacimiento").value;
	provincia = document.getElementById("provincia").value;
	pais = document.getElementById("pais").value;
	pass = document.getElementById("password").value;
	pass2 = document.getElementById("password2").value;
	correo = document.getElementById("correo").value;
	expresion = /\w+@\w+\.+[a-z]/; //expresion regular que va a servir para el correo
	validacion_completa = false;
	
	//validacion de campos vacios
	if(usuario==="" || nombre==="" || apellido==="" || nacimiento==="" || provincia==="" || pais==="" || pass==="" || pass2==="" || correo===""){
		alert("Todos los campos son obligatorios");
		return false;
	}
	//validacion de la longitud del campo
	else if(usuario.length>15){
		alert("El usuario es muy largo");
		return false;
	}
	else if(nombre.length>20){
		alert("El nombre es muy largo");
		return false;
	}
	else if(apellido.length>30){
		alert("El apellido es muy largo");
		return false;
	}
	else if(pass.length>20){
		alert("La clave es muy larga");
		return false;
	}
	else if(pass2!=pass){
		alert("Los campos de contraseña no son iguales");
		return false;
	}
	else if(expresion.test(correo)){
		alert("El correo no es valido");		
		return false;
	}
	else{
		validacion_completa = true;		
	}	
	//validacion de los campos nombre y apellido que no tenga 2 o menos caracteres
	if(nombre.length<3){
		alert("El campo de nombre debe tener más de 2 caracteres");		
		return false;
	}
	else if(apellido.length<3){
		alert("El campo apellido debe tener más de 2 caracteres");
		return false;
	}
	else{
		validacion_completa=true;
		alert("Has sido registrado con éxito")
		return validacion_completa;
	}	
}