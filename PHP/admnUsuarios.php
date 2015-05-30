<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 25/05/15
 * Time: 12:55 PM
 */
include_once "Modelos/Usuario.php";
include_once "operacionesMysqli.php";
session_start();

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

    public function obtenerUsuario(){
        $Query = "SELECT * FROM $this->TName WHERE Usuario ='".$_SESSION['username']."'";
        $Result = ejecutarQuery($Query);
        foreach ($Result as $usuario) {
            $idUsuario = $usuario['Id'];
            $Nombre = $usuario['Nombre'];
            $Direccion = $usuario['Nombre'];
            $Mail = $usuario['Mail'];
            $Usuario = $usuario['Usuario'];
            $Contrasena = $usuario['Contrasena'];
            $UsuarioActual = new Usuario($Nombre,$Direccion,$Mail,$Usuario,$Contrasena);
            $UsuarioActual->setIdUsuario($idUsuario);
            return $UsuarioActual;
        }
    }

    public function obtenerIDUsuario(){
        $Query = "SELECT Id FROM $this->TName WHERE Usuario ='".$_SESSION['username']."'";
        $result = ejecutarQuery($Query);

        foreach ($result as $usuario) {
            $idUsuario = $usuario['Id'];
            return $idUsuario;
        }
    }
}