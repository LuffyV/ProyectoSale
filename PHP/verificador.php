<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 3/05/15
 * Time: 08:59 PM
 */
session_start();

if(!isset($_SESSION['loggedin'])) {
    header('location: index.php');
}