<?php 
//conexion
echo "probando base gggf";
$conexion = mysqli_connect("localhost","root","","hexagono");
if(mysqli_connect_errno()){
    echo "Error de conexion";
} else{
    echo "se conecto de forma piola";
}
//llamo los datos
$query = mysqli_query($conexion,"SELECT * FROM libro");
//$query = mysqli_query($conexion,"SELECT * FROM libro WHERE nombre = "cinco cerditos"");
$dos = mysqli_query($conexion,"SELECT * FROM generoliterario");

echo "<pre>";
var_dump($query);
echo "</pre>";

echo "<pre>";
var_dump($dos);
echo "</pre>";




//muestro todos los elementos de la tabla
/*while($filas = $listado = mysqli_fetch_array($query)){
    echo $filas['nombre']."<br>";
    echo $filas['autor']."<br>";
    echo $filas['año']."<br>";
}
*/

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mostrar datos</title>
</head>
<body>
    <h1>Hola probando datos</h1>
    <table border =1>
    <?php 
        while($filas = $listado = mysqli_fetch_array($query))
        {?>
        <tr>
            <td><?php echo $filas['id_libro'];?></td>
            <td><?php echo $filas['nombre'];?></td>
            <td><?php echo $filas['autor'];?></td>
            <td><?php echo $filas['año'];?></td>
            <td><a href="editar.php?id_libro=<?php echo $filas['id_libro'];?>"> editar</a> </td>
            <td><a href="editar.php?nombre=<?php echo $filas['nombre'];?>"> editar</a> </td>
            
        </tr>
        <?php } ?> 
    </table>
    
</body>
</html>