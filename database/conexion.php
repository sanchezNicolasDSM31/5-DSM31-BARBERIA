<?php
    $enlace = mysqli_connect("127.0.0.1", "root", "", "database_barber");

    if (!$enlace) {
        echo "Error: No se pudo conectar a MySQL." . PHP_EOL;
        echo "errno de depuración: " . mysqli_connect_errno() . PHP_EOL;
        echo "error de depuración: " . mysqli_connect_error() . PHP_EOL;
        exit;
    }

    echo "Éxito: Se realizó la conexion a MySQL." . PHP_EOL;
    echo "Información del host: " . mysqli_get_host_info($enlace) . PHP_EOL;

    mysqli_close($enlace);
?>

<!-- 
$host = "localhost";
$User = "root";
$pases = "";

$db = "iniciosesiondb";

$conexion = mysqli_connect($host, $user , $pass , $bd);

if (!con) {
    echo "Conexion fallida";-->