<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>¡Registrate!</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
	<script src="JS/funciones.js"></script>
</head>
<body class="normal">
<center>
	<form class="util" enctype="multipart/form-data" name="registro" action="Controladores/registrarUsuario.php" method="post" accept-charset="utf-8" onSubmit = "return validarRegistro()"><h3>Registro:</h3>
	<table>
		<tr>
			<td>
				Nombre Completo: 
			</td>
			<td>
				<input type="text" name="name" id="name">
			</td>
		</tr>
		<tr>
			<td>
				E-mail:  
			</td>
			<td>
				<input type="email" name="mail" id="mail">
			</td>
		</tr>
		<tr>
			<td>
				Dirección:  
			</td>
			<td>
				<input type="text" name="add" id="add">
			</td>
		</tr>
		<tr>
			<td>
				Usuario: 
			</td>
			<td>
				<input type="text" name="usr" id ="usr">
			</td>
		</tr>
		<tr>
			<td>
				Contraseña: 
			</td>
			<td>
				<input type="password" name="pass" id="pass">
			</td>
		</tr>
		<tr>
			<td>
				Confirmar contraseña: 
			</td>
			<td>
				<input type="password" name="pass2" id="pass2">
			</td>
		</tr>
	</table>
	<input type="submit" value="¡Registrate!">
	</form>
</center>
</body>
</html>