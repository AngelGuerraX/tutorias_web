<?php

$servidor="localhost";
$BaseDeDatos="tutoriasonline";
$usuario="root";
$contrasenia="";

try{ 
    $conexion= new PDO("mysql:host=$servidor;bdname=$BaseDeDatos",$usuario,$contrasenia);
    $conexion->exec("USE $BaseDeDatos");
}catch(Exception $ex){
    echo $ex->getMessage();
}

?>