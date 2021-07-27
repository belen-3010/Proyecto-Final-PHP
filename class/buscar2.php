<?php 

include "conexion.php";



//if(isset($_POST["busqueda"]))
$busqueda =mysqli_real_escape_string($conexion,$_POST['buscar']);


$consultas = "SELECT * FROM libro WHERE nombre LIKE '%$busqueda%'";

$query = mysqli_query($conexion,$consultas);

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/estilos7.css">
    <title>Buscar</title>
    <p>Tené en cuenta que vas a necesitar los datos para pedir el texto.</p>
</head>
<body>
    <section class="header">
        <div class="volver">
            <a href="../sesionabierta.html">Volver</a>
        </div>
        <br>
        <div class="contenedor">
    <h2>RESULTADOS</h2>
   
    <form action="mandarmail.php" method="post" name="form1">
    <table>
    <tr>
    <th>ID</th>
    <th>Nombre</th>
    <th>Autor/a</th>
    <th>Fecha de publicación</th>
  </tr>
<?php 
        while($filas=mysqli_fetch_array($query))
        {?>

      
        <tr>
            <td name="id" id="cero"><?php echo $filas['id_libro'];?></td>
            <td id="uno"><?php echo $filas['nombre'];?></td>
            <td id="dos"><?php echo $filas['autor'];?></td>
            <td id="tres"><?php echo $filas['año'];?></td>
            <td ><input type="submit" name="button" value="submit" class="rosa2"></td>
            
        </tr>
        
        <?php } ?> 
</table>
<a href="../libros.html"id="busqueda" class="rosa">Otra búsqueda</a>
</form>
</div>
    </section>
    

</body>
</html>
