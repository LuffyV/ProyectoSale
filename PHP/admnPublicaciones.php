<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 25/05/15
 * Time: 10:22 AM
 */

include_once "operacionesMysqli.php";
include_once "Modelos/Publicacion.php";

class admnPublicaciones {
    private $TName = "Publicacion";

    public function publicar (Publicacion $publicacion){

        $Query = "INSERT INTO $this->TName (IDUsuario, Producto, Descripcion, Precio, Existencia, FechaPublicacion) VALUES ('".$publicacion->getIdUsuario()."','".$publicacion->getProducto()."','".$publicacion->getDescripcion()."','".$publicacion->getPrecio()."','".$publicacion->getExistencia()."','".$publicacion->getFecha()."')";
        $isPublicado = ejecutarQuery($Query);
        if($isPublicado){
            header("location:../perfil.php");
        } else {
            echo "Ha habido un error";
        }
    }

    public function obtenerPublicaciones($idUsuario){
        $Query = "SELECT * FROM $this->TName WHERE IDUsuario ='".$idUsuario."'";
        return ejecutarQuery($Query);
    }
}