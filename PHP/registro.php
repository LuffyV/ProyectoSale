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
$Imagen = $_FILES["img"]["tmp_name"];

if(is_uploaded_file($Imagen)){
# verificamos el formato de la imagen
if ($_FILES["img"]["type"]=="image/jpeg" || $_FILES["img"]["type"]=="image/pjpeg" || $_FILES["img"]["type"]=="image/gif" || $_FILES["img"]["type"]=="image/bmp" || $_FILES["img"]["type"]=="image/png") {
    # Escapa caracteres especiales
    $imagenEscapes=mysqli_real_escape_string($link, file_get_contents($_FILES["img"]["tmp_name"]));
    $Query = "INSERT INTO Clientes (Nombre, Direccion, Mail, Usuario, Contrasena, Imagen, Tipo) VALUES ('$sNombre','$sDireccion','$sMail','$sUsuario','$sPassword','$imagenEscapes','".$_FILES["img"]["type"]."')";
    $IsCreated = ejecutarQuery($Query);
    if($IsCreated){
        echo "Se ha creado un nuevo registro de clientes";
        header('refresh: 3; url = ../index.php');
    } else {
        echo "Ya existe este usuario.";
        header('refresh: 3; url = ../registro.php');
    }
}
}

?>
</body>
</html>