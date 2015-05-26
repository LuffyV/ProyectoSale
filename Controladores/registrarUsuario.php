<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 25/05/15
 * Time: 01:08 PM
 */

include_once "../PHP/Modelos/Usuario.php";
include_once "../PHP/operacionesMysqli.php";
include_once "../PHP/admnUsuarios.php";

$Nombre = $_POST['name'];
$Direccion = $_POST['add'];
$Mail = $_POST['mail'];
$Usuario = $_POST['usr'];
$Password = md5($_POST['pass']);

$Usuario = new Usuario($Nombre,$Direccion,$Mail,$Usuario,$Password);

$admnUsuarios = new admnUsuarios();

$admnUsuarios -> registrarUsuario($Usuario);