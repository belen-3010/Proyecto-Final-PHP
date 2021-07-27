<?php 
include "conexion.php";

$valor1= $_POST['nombre'];
$valor2= $_POST['apellido'];
$valor3= $_POST['email'];
$valor4= $_POST['usuario'];
$valor5= $_POST['contraseña'];



$registrar = "INSERT INTO usuarios (nombre, apellido, mail, usuario, contraseña) VALUES ('$valor1', '$valor2', '$valor3', '$valor4', '$valor5')";
echo "<br>";

$query = mysqli_query($conexion,$registrar);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos7.css">
    <title>Mostrar datos</title>
</head>
<body>
<section class="header">
        <div class="volver">
            <a href="index.html">Volver</a>
        </div>
</section>
        <div class="contenedor">
    <h1>Excelente"</h1>
    <p> Tu texto se insertó correctamente.</p>
    <a href="../sesionabierta.html">Volver al inicio.</a>
    </div>
    
</body>
</html>
