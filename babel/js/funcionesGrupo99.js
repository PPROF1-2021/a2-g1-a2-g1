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

function calcularFecha(){
	fecha = document.getElementById("fecha").value;
	
	if(isNaN(fecha)){
		alert("El dato ingresado no es numérico");		
		return false;
	}
	else if(fecha<1500 || fecha >2021){
		fecha_Int=parseInt(fecha);
		alert("El año no puede ser menor a 1500 ni mayor a 2021");
	return false;
	
	}
	else{
		fecha_Int=parseInt(fecha);
		alert("El libro tiene una antiguedad de " + (2021- fecha_Int) + "años");
		return false;
	}
	return false;
}

function mostrardatos() {
	const usuario=document.getElementById("usuario")	

	new URL(location.href).searchParams.get('usuario')
	const params = new URL (location.href).searchParams
	const usuario = params.get('usuario')

	usuario.innerHTML=`Tu usuario es ${usuario}`

	const nombre=document.getElementById("nombre")	

	new URL(location.href).searchParams.get('nombre')
	const params = new URL (location.href).searchParams
	const nombre = params.get('nombre')

	nombre.innerHTML=`Tu nombre es ${nombre}`

	const apellido=document.getElementById("apellido")	

	new URL(location.href).searchParams.get('apellido')
	const params = new URL (location.href).searchParams
	const apellido = params.get('apellido')

	apellido.innerHTML=`Tu apellido es ${apellido}`

	const nacimiento=document.getElementById("nacimiento")	

	new URL(location.href).searchParams.get('nacimiento')
	const params = new URL (location.href).searchParams
	const nacimiento = params.get('nacimiento')

	nacimiento.innerHTML=`Tu fecha de nacimiento es ${nacimiento}`

	const provincia=document.getElementById("provincia")	

	new URL(location.href).searchParams.get('provincia')
	const params = new URL (location.href).searchParams
	const provincia = params.get('provincia')

	provincia.innerHTML=`Tu provincia es ${provincia}`

	const pais=document.getElementById("pais")	

	new URL(location.href).searchParams.get('pais')
	const params = new URL (location.href).searchParams
	const pais = params.get('pais')

	pais.innerHTML=`Tu pais es ${pais}`

	const password=document.getElementById("password")	

	new URL(location.href).searchParams.get('password')
	const params = new URL (location.href).searchParams
	const password = params.get('password')

	password.innerHTML=`Tu password es ${password}`

	const password2=document.getElementById("password2")	

	new URL(location.href).searchParams.get('password2')
	const params = new URL (location.href).searchParams
	const password2 = params.get('password2')

	password2.innerHTML=`La comprobación de tu password es ${password2}`

	const email=document.getElementById("email")	

	new URL(location.href).searchParams.get('email')
	const params = new URL (location.href).searchParams
	const email = params.get('email')

	email.innerHTML=`Tu email es ${email}`

}

function redireccionar(){
	window.location.href = "index.html";
  }
   
  setTimeout("redireccionar()", 5000);

  