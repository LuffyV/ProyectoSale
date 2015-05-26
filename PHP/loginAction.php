<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 3/05/15
 * Time: 01:34 PM
 */
include "operacionesMysqli.php";

$TName = "Usuarios";

//Obteniendo el usuario y contraseña de la página.
$username = $_POST['name'];
$usrpass = md5($_POST['pass']);

echo $usrpass;

//Creando la consulta.
$query = "SELECT * FROM $TName WHERE Usuario ='$username' AND Contrasena ='$usrpass'";
echo $query;

//Verificando el resultado de la consulta.
$count = mysqli_num_rows(ejecutarQuery($query))or die("No existe el usuario");

if($count == 1) {
    session_start();
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    echo "<br> Bienvenido! " . $_SESSION['username']."<br>";
    echo "<a href=\"../home.php\">Volver al inicio</a>";

} else {
    echo "<br/>Username o Password estan incorrectos.<br>";
    echo "<a href='../index.php'>Volver a Intentarlo</a>";
}