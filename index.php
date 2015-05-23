<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Login | Register</title>
	<link rel="stylesheet" type="text/css" href="CSS/estilos.css">
	<script src="JS/funciones.js"></script>
</head>
<body class="normal">
<h1 class="title">$ALE!</h1>
<form name="login" action="PHP/loginAction.php" method="post" accept-charset="utf-8">
	<div>Login:<br>
	<input type="text" name="name" id="name"><br>
	<input type="password" name="pass" id="pass"><br><br>
	<input type="submit" value="Log in" >
	<br><br>
	<a href="registro.php">¡Registrate!</a>
	</div>
</form>
</body>
</html>