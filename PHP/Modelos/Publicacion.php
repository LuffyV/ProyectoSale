<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 25/05/15
 * Time: 10:17 AM
 */

class Publicacion {
    private $IdPublicacion;
    private $IdUsuario;
    private $Producto;
    private $Descripcion;
    private $Precio;
    private $Existencia;
    private $Fecha;

    function __construct($IdUsuario, $Producto, $Precio, $Existencia, $Descripcion) {
        $this->IdUsuario = $IdUsuario;
        $this->Producto = $Producto;
        $this->Descripcion = $Descripcion;
        $this->Precio = $Precio;
        $this->Existencia = $Existencia;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->IdUsuario;
    }

    /**
     * @param mixed $IdUsuario
     */
    public function setIdUsuario($IdUsuario)
    {
        $this->IdUsuario = $IdUsuario;
    }

    /**
     * @return mixed
     */
    public function getProducto()
    {
        return $this->Producto;
    }

    /**
     * @param mixed $Producto
     */
    public function setProducto($Producto)
    {
        $this->Producto = $Producto;
    }

    /**
     * @return mixed
     */
    public function getDescripcion()
    {
        return $this->Descripcion;
    }

    /**
     * @param mixed $Descripcion
     */
    public function setDescripcion($Descripcion)
    {
        $this->Descripcion = $Descripcion;
    }

    /**
     * @return mixed
     */
    public function getPrecio()
    {
        return $this->Precio;
    }

    /**
     * @param mixed $Precio
     */
    public function setPrecio($Precio)
    {
        $this->Precio = $Precio;
    }

    /**
     * @return mixed
     */
    public function getExistencia()
    {
        return $this->Existencia;
    }

    /**
     * @param mixed $Existencia
     */
    public function setExistencia($Existencia)
    {
        $this->Existencia = $Existencia;
    }

    /**
     * @return mixed
     */
    public function getFecha()
    {
        return date('Y-m-d H:i:s');
    }

    /**
     * @param mixed $Fecha
     */
    public function setFecha($Fecha)
    {
        $this->Fecha = $Fecha;
    }


    /**
     * @return mixed
     */
    public function getIdPublicacion()
    {
        return $this->IdPublicacion;
    }

    /**
     * @param mixed $IdPublicacion
     */
    public function setIdPublicacion($IdPublicacion)
    {
        $this->IdPublicacion = $IdPublicacion;
    }

}