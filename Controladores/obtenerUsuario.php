<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 25/05/15
 * Time: 12:53 PM
 */

include_once "../PHP/Modelos/Usuario.php";
include_once "../PHP/operacionesMysqli.php";
include_once "../PHP/admnUsuarios.php";

$admnUsuarios = new admnUsuarios();

function obtenerUsuario(){
    global $admnUsuarios;
    return $admnUsuarios->obtenerIDUsuario();
}