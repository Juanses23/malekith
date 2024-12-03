<?php

$server = "localhost";
$user = "root";
$pass = "";
$db = "malekith";


$conexion = new mysqli($server, $user, $pass, $db);
$conexion->set_charset("utf8");
?>