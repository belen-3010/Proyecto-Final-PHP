<?php 
include "conexion.php";
$valor1 = $_POST["nombre"];
$valor2 = $_POST["autor"];

var_dump($valor1);
var_dump($valor2);
$actualizar = "UPDATE libro SET autor = '$valor2' WHERE nombre = '$valor1'";
$query = mysqli_query($conexion,$actualizar);
//usar para insertar uevos valores

?>