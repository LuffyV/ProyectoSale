<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 25/05/15
 * Time: 10:56 AM
 */

class Usuario {
    private $idUsuario;
    private $Nombre;
    private $Direccion;
    private $Mail;
    private $Usuario;
    private $Contrasena;

    function __construct($Nombre, $Direccion, $Mail, $Usuario, $Contrasena){
        $this->Nombre = $Nombre;
        $this->Direccion = $Direccion;
        $this->Mail = $Mail;
        $this->Usuario = $Usuario;
        $this->Contrasena = $Contrasena;
    }

    /**
     * @return mixed
     */
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    /**
     * @param mixed $idUsuario
     */
    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;
    }

    /**
     * @return mixed
     */
    public function getNombre()
    {
        return $this->Nombre;
    }

    /**
     * @param mixed $Nombre
     */
    public function setNombre($Nombre)
    {
        $this->Nombre = $Nombre;
    }

    /**
     * @return mixed
     */
    public function getDireccion()
    {
        return $this->Direccion;
    }

    /**
     * @param mixed $Direccion
     */
    public function setDireccion($Direccion)
    {
        $this->Direccion = $Direccion;
    }

    /**
     * @return mixed
     */
    public function getMail()
    {
        return $this->Mail;
    }

    /**
     * @param mixed $Mail
     */
    public function setMail($Mail)
    {
        $this->Mail = $Mail;
    }

    /**
     * @return mixed
     */
    public function getUsuario()
    {
        return $this->Usuario;
    }

    /**
     * @param mixed $Usuario
     */
    public function setUsuario($Usuario)
    {
        $this->Usuario = $Usuario;
    }

    /**
     * @return mixed
     */
    public function getContrasena()
    {
        return $this->Contrasena;
    }

    /**
     * @param mixed $Contrasena
     */
    public function setContrasena($Contrasena)
    {
        $this->Contrasena = $Contrasena;
    }

}