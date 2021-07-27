<?php 
include "conexion.php";

$busqueda =mysqli_real_escape_string($conexion,$_POST['usuario']);
$busqueda2 =mysqli_real_escape_string($conexion,$_POST['password']);

var_dump($busqueda);
var_dump($busqueda2);

$consultasql = "SELECT * FROM usuarios WHERE usuario = '$busqueda' AND  contraseña = '$busqueda2'";

echo "<br>";
var_dump($consultasql);
$query = mysqli_query($conexion,$consultasql);
echo "<br>";
var_dump($query);
echo "<br>";
$num_filas = mysqli_num_rows($query);
var_dump($num_filas);

if ($num_filas){
    echo "Bienvenido!";
    session_start();

    header('location: ../sesionabierta.html');


}else {
    echo "No puede ingresar vuelva pronto.";
    //header('location: ../sesionincorrecta.html' );
}
?>
