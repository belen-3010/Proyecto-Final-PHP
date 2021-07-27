<?php 
include "conexion.php";
//creo que ese post es para que agerre lo del form
$libro = $_GET['nombre'];
var_dump($libro);

//No entiendo por qué no funciona esto
$eliminar = "DELETE FROM libro WHERE nombre = '$libro'";
$query = mysqli_query($conexion,$eliminar);



?>