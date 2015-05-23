var userArray = ["JossFT", "VannFF", "JuanU"];
var passArray = ["flores234", "vfrafer13", "ucan124"];
var valid = false;

function validarLogIn () {
var user = document.getElementById("uid").value;
var pass = document.getElementById("pwd").value;

	if(user.length==0){
		alert("El usuario no puede estar en blanco");
		console.log("osogarf assenav");
		document.getElementById("uid").focus();
		return false;
	}else{
		if(pass.length==0){
			alert("La contraseña no puede estar en blanco");
			document.getElementById("pwd").focus();
			return false;
		}else{
			 for (var i=0; i <userArray.length; i++) {
        			if ((user == userArray[i]) && (pass == passArray[i])) {
            				valid = true;
            				break;
        			}
    			}

    			if (valid) { 
				return true;
    			} else {
        			alert("Usuario y/o contraseña inválida. Intente de nuevo");
        			document.getElementById("pwd").value = "";
        			document.getElementById("uid").value = "";
        			document.getElementById("uid").focus();
				return false;
			}
		}
	}
}

function validarRegistro(){
var name= document.getElementById("name").value;
var email = document.getElementById("mail").value;
var age= document.getElementById("age").value;
var address= document.getElementById("add").value;
var user= document.getElementById("usr").value;
var pass = document.getElementById("pass").value;
var passconf = document.getElementById("pass2").value;

	if(name.length==0){
		alert("El nombre no puede estar en blanco");
		document.getElementById("name").focus();
		return false;
	}else{
		
		if(email.length==0){
			alert("El correo electrónico no puede estar en blanco");
			document.getElementById("mail").focus();
			return false;
		}else{
			if(age.length==0){
				alert("La edad no puede estar en blanco");
				document.getElementById("age").focus();
				return false;
			}else{
				if(address.length==0){
					alert("La dirección no puede estar en blanco");
					document.getElementById("add").focus();
					return false;
				}else{
					if(user.length==0){
						alert("El usuario no puede estar en blanco");
						document.getElementById("usr").focus();
						return false;
					}else{
						if(pass.length==0){
							alert("La contraseña no puede estar en blanco");
							document.getElementById("pass").focus();
							return false;
						}else{
							if(passconf.length==0){
								alert("Se debe confirmar la contraseña");
								document.getElementById("pass2").focus();
								return false;
							}
						}
					}

				}
			}
		}

		for (var i=0; i <userArray.length; i++) {
        	if ((user == userArray[i])) {
            	alert("El nombre de usuario ya está registrado");
            	document.getElementById("usr").value = "";
            	document.getElementById("usr").focus();
            	return false;
        	}
    	}
		
		/**var expreg = new RegExp("^[A-z0-9]{3,15}$");
		if(!expreg.test(user)){
			alert("El nombre de usuario sólo puede contener letras del alfabeto inglés en mayúsculas y minúsculas) y números; longitud mínima 3 caracteres y máxima 15.")
			document.getElementById("usr").value = "";
            document.getElementById("usr").focus();
			return false;
		}**/

		/**var expreg2 = new RegExp("(^(?=.*[a-z])(?=.*[A-Z])(?=.*\d){6,20}.+$)");
		if(!expreg2.test(pass)){
			alert("La contraseña debe tener tanto mayusculas y minusculas como caracteres numericos y que sea de 6 a 15 caracteres.")
			document.getElementById("pass").value = "";
            document.getElementById("pass").focus();
            document.getElementById("pass2").value = "";
            document.getElementById("pass2").focus();
			return false;
		}**/

		if(pass != passconf){
			alert("Las contraseñas deben coincidir");
			document.getElementById("pass2").value = "";
            document.getElementById("pass2").focus();
            return false;
		}
		return true;
	}
}