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
        global $TName;
        $Query = "INSERT INTO $TName (IDUsuario, Producto, Descripcion, Precio, Existencia, FechaPublicacion) VALUES ('".$publicacion->getIdUsuario()."','".$publicacion->getProducto()."','".$publicacion->getDescripcion()."','".$publicacion->getPrecio()."','".$publicacion->getExistencia()."','".$publicacion->getFecha()."')";

        $isPublicado = ejecutarQuery($Query);

        if($isPublicado){
            echo "Se ha publicado perfectamente.";
        } else {
            echo "Ha habido un error";
        }
    }
}