<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 25/05/15
 * Time: 12:55 PM
 */
include_once "Modelos/Usuario.php";
include_once "operacionesMysqli.php";

class admnUsuarios {
    private $TName = "Usuarios";

    public function registrarUsuario(Usuario $usuario){

        $Query = "INSERT INTO $this->TName (Nombre, Direccion, Mail, Usuario, Contrasena) VALUES ('".$usuario->getNombre()."','".$usuario->getDireccion()."','".$usuario->getMail()."','".$usuario->getUsuario()."','".$usuario->getContrasena()."')";
        echo $Query;
        $isInsertado = ejecutarQuery($Query);

        if ($isInsertado){
            echo "Se ha creado un nuevo registro de clientes";
            header('refresh: 3; url = ../index.php');
        } else {
            echo "Ya existe este usuario.";
            header('refresh: 3; url = ../registro.php');
        }
    }
}