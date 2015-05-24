<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 23/05/15
 * Time: 12:43 PM
 */

include "PHP/verificador.php";
include "PHP/operacionesMysqli.php";

$Query = "SELECT Imagen FROM Clientes WHERE Nombre = ".$_SESSION['username'];
$Result = mysqli_fetch_array(ejecutarQuery($Query));
?>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <title><?php echo $_SESSION['username']; ?></title>
    <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
<div class="barra"><img src="Sources/home.png" width="25">  <img src="Sources/inbox.png" width="25">    <img src="Sources/notifications.png" width="25">   <a href="home.php">&nbsp $ALE &nbsp</a> <input type="text" size="60" placeholder="Buscar"> <a href="perfil.php"><?php echo $_SESSION['username']; ?></a> | <a href="PHP/cerrarSesion.php">Cerrar Sesión</a> </div>
<div class="normal">
    <div class="menuizq">
        <?php header("Content-type:".$Result["Tipo"]);
        echo $Result["Imagen"];?>
    </div>
    <div>
        Menu centro
    </div>
</div>
</body>
</html>