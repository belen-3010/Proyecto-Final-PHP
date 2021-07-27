<?php 
 include "conexion.php";
//llamo los datos
$query = mysqli_query($conexion,"SELECT * FROM libro");
//$query = mysqli_query($conexion,"SELECT * FROM libro WHERE nombre = "cinco cerditos"");
$dos = mysqli_query($conexion,"SELECT * FROM generoliterario");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos8.css">
    <title>Hexágono Libros</title>
</head>
<body>
    <section class="header">
		<img src="img/logo2.png" alt="">
        <div class="volver">
            <a href="sesionabierta.html">Volver</a>
        </div>
    </section>
    <div class="contenedor">
    <h1 id="titulo">EDICIÓN DE TEXTOS</h1>
    <table>
    <tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Autor/a</th>
    <th>Fecha de publicación</th>
    <th></th>
    <th></th>
  </tr>
    
        <tr>
            <td id="cero">id</td>
            <td id="uno">nombre</td>
            <td id="dos">autor</td>
            <td id="tres">fecha de oublicacion</td>
            <td><a href="editar.php?nombre=<?php echo $filas['nombre'];?>" class="rosa2"> Editar</a> </td>
            <td><a href="eliminar.php?nombre=<?php echo $filas['nombre'];?>" class="rosa2">Eliminar</a> </td>
            
        </tr>
       
    </table>
    </div>
</body>
</html>