<html>
<head>
	<meta charset="UTF-8">
</head>
<body>
<?php
$sNombre = $_POST["name"];
$sDireccion = $_POST["add"];
$sMail = $_POST["mail"];
$sUsuario = $_POST["usr"];
$sPassword = $_POST["pass"];

$sDBServer = "localhost";
$sDBName = "Ventas";
$sDBUserName = "root";
$sDBPassword = "";

$oLink = mysql_connect($sDBServer,$sDBUserName,$sDBPassword);
@mysql_select_db($sDBName,$oLink);

$sSquery = "INSERT INTO Clientes (Nombre, Direccion, Mail, Usuario, Contrasena) VALUES ('$sNombre','$sDireccion','$sMail','$sUsuario','$sPassword')";

mysql_query($sSquery, $oLink);
$sInfo = "Se ha creado un nuevo registro de clientes";
echo $sInfo;
mysql_close($oLink);

?>
</body>
</html>