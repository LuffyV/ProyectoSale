<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 25/05/15
 * Time: 10:48 AM
 */

include_once "../PHP/Modelos/Publicacion.php";
include_once "../PHP/admnPublicaciones.php";
include "obtenerUsuario.php";

$IdUsuario = obtenerUsuario();
$Producto = $_POST['prod'];
$Precio = $_POST['prec'];
$Stock = $_POST['stock'];
$Descripcion = $_POST['desc'];
$Fecha = date('Y-m-d H:i:s');

$Publicacion = new Publicacion($IdUsuario,$Producto,$Precio,$Stock,$Descripcion);

$admnPublicaciones = new admnPublicaciones();
echo $IdUsuario;
$admnPublicaciones->publicar($Publicacion);