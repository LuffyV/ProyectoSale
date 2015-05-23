<?php
/**
 * Created by PhpStorm.
 * User: joshua
 * Date: 6/05/15
 * Time: 03:11 PM
 */

session_start();
unset($_SESSION['loggedin']);
unset($_SESSION['username']);
header('location: ../index.php');