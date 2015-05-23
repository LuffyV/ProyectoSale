<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 6/05/15
 * Time: 11:04 PM
 */

function realizarConsulta($query){
	$sDBServer = "localhost";
	$sDBName = "Ventas";
	$sDBUserName = "root";
	$sDBPassword = "";

    //Conectando a la base de datos.
    $link = new mysqli($sDBServer,$sDBUserName,$sDBPassword,$sDBName)or die("No podemos conectar a la Base de datos");
    mysqli_select_db($link,$sDBName)or die("No se puede encontrar la tabla");

    return $result = mysqli_query($link,$query);
}