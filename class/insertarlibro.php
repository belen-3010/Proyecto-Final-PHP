<?php 
include "conexion.php";

$valor1= $_POST['libro'];
$valor2= $_POST['autor'];
$valor3= $_POST['año'];
$valor4= $_POST['genero'];
$valor5= $_POST['genero2'];



$insertar = "INSERT INTO libro (nombre, autor, año, genero, gnarrativo) VALUES ('$valor1', '$valor2', '$valor3', '$valor4', '$valor5')";
echo "<br>";

$query = mysqli_query($conexion,$insertar);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos2.css">
    <title>Mostrar datos</title>
</head>
<body>

    <section class="header">
        <img src="img/logo2.png" alt="">
        <div class="volver">
            <a href="index.html">Volver</a>
        </div>
>
    </section>

        
        <div class="contenedor">
    <h1>¡Excelente!</h1>
    <p> Tu texto se insertó correctamente.</p>
    <a href="../sesionabierta.html" class="rosa">Volver al inicio.</a>
    </div>
    
</body>
</html>
