<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 23/05/15
 * Time: 12:43 PM
 */

include_once "PHP/verificador.php";
include_once "PHP/operacionesMysqli.php";
include_once "PHP/admnPublicaciones.php";
include_once "PHP/admnUsuarios.php";

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
    <div class="feed">
        <form action="Controladores/insertarPublicacion.php" method="post">
            Producto: <input type="text" name="prod" id="prod" size="10"> Precio: <input type="text" name="prec" id="prec" size="5"> Stock: <input type="text" id="stock" name="stock"><br>
            Descripción:<br> <textarea name="desc" id="text" rows="2" cols="60"></textarea><br><br>
            <input type="submit" value="Publicar" >
        </form>
    </div><br>
        <?php
        $admnUsuario = new admnUsuarios();
        $admnPublicaciones = new admnPublicaciones();
        $publicaciones = $admnPublicaciones->obtenerPublicaciones($admnUsuario->obtenerIDUsuario());

        foreach ($publicaciones as $publicacionActual) {
            $IDPublicacion = $publicacionActual['IDPublicacion'];
            $IDUsuario = $publicacionActual['IDUsuario'];
            $Producto = $publicacionActual['Producto'];
            $Descripcion = $publicacionActual['Descripcion'];
            $Precio = $publicacionActual['Precio'];
            $Existencia = $publicacionActual['Existencia'];
            $Fecha = $publicacionActual['FechaPublicacion'];
            $Publicacion = new Publicacion($IDUsuario,$Producto,$Precio,$Existencia,$Descripcion);
            $Publicacion->setIdPublicacion($IDPublicacion);
            $Publicacion->setFecha($Fecha);
            echo "<div class='feed'>
<h1>$Producto</h1>
</div><br>";
        }
        ?>
</div>
</body>
</html>