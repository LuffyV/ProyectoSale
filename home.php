<?php
include "PHP/verificador.php";
?>
<html>
<head lang="es">
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" type="text/css" href="CSS/estilos.css">
</head>
<body>
<div class="barra"><img src="Sources/home.png" width="25">  <img src="Sources/inbox.png" width="25">    <img src="Sources/notifications.png" width="25">   <a href="home.php">&nbsp $ALE &nbsp</a> <input type="text" size="60" placeholder="Buscar"> <a href="perfil.php"><?php echo $_SESSION['username']; ?></a> | <a href="PHP/cerrarSesion.php">Cerrar Sesión</a> </div>
<div class="normal">
    <div class="menuizq">
        <div class="itemMenu">
            Perfil
        </div>
    </div>
    <div class="menuizq">
        <div class="itemMenu">
            Actividades
        </div>
    </div>
</div>
</body>
</html>