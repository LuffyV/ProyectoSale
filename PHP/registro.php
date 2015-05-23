<html>
<head>
	<meta charset="UTF-8">
</head>
<body class="normal">
<?php
include "operacionesMysqli.php";

$sNombre = $_POST["name"];
$sDireccion = $_POST["add"];
$sMail = $_POST["mail"];
$sUsuario = $_POST["usr"];
$sPassword = $_POST["pass"];

$Query = "INSERT INTO Clientes (Nombre, Direccion, Mail, Usuario, Contrasena) VALUES ('$sNombre','$sDireccion','$sMail','$sUsuario','$sPassword')";

$IsCreated = ejecutarQuery($Query);
if($IsCreated){
    echo "Se ha creado un nuevo registro de clientes";
    header('refresh: 3; url = ../index.php');
} else {
    echo "Ya existe este usuario.";
    header('refresh: 3; url = ../registro.php');
}

?>
</body>
</html>