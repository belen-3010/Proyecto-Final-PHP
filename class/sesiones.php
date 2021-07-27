<?php 
echo "hola soy sesion ";

include "conexion.php";
//si quiero traer cosas de la base necesito el incldue
session_start();
//el valor se puede traer de la base de datos
$_SESSION['iniciado']= $_POST['nombre'];
$_SESSION['afip']= "chau";

echo $_SESSION["iniciado"];
echo $_SESSION["afip"];

header("refresh: 5; url=/Proyecto_final/index.html");



?>