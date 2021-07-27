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
    
  <?php 
        while($filas = $listado = mysqli_fetch_array($query))
        {?>
        <tr>
            <td id="uno"><?php echo $filas['id_libro'];?></td>
            <td id="dos"><?php echo $filas['nombre'];?></td>
            <td id="tres"><?php echo $filas['autor'];?></td>
            <td id="cuatro"><?php echo $filas['año'];?></td>
            <td><a href="editar.php?id_libro=<?php echo $filas['id_libro'];?>" class="rosa2"> Editar</a> </td>
            <td><a href="eliminar.php?nombre=<?php echo $filas['nombre'];?>"class="rosa2"> Eliminar</a> </td>
            
        </tr>
        <?php } ?> 
       
    </table>
    </div>
</body>
</html>