<?php
$host = "localhost";
$User = "root";
$pases = "";

$db = "iniciosesiondb";

$conexion = mysqli_connect($host, $user , $pass , $bd);

if (!con) {
    echo "Conexion fallida";
}