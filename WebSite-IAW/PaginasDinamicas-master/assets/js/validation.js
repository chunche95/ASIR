function validar(){
	
	var name, pass, expresion;
	
	name=document.getElementById("demo-name").value;
	pass=document-getElementById("demo-password").value;
	
	expresion = /\w/;
	
	if(name === "" || pass === "")
	{
		alert("Es necesario tener credenciales válidas para acceder.");
		return false;
	}
	else if ( name.length > 15 ) 
	{
		alert("El nombre introducido es incorrecto ");
		return false;
	}
	else if (!expresion.test(name))
	{
			alert("Los datos introducidos no son válidos");
	}
	else if ( pass.length > 10)
	{
		alert("Tiene tres intentos más antes de bloquear su cuenta");
		return false;
	}
	
	/* isNaN("telefono") --> not a number, abreviación de la funcion para solicitar integer's y no varchar */
} 