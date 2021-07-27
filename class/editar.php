<?php 
echo "hola soy editar";
include "conexion.php";

var_dump($_GET);

$id = $_GET['nombre'];
$sql = "SELECT * FROM libro WHERE nombre = '$id'";
$resultado = mysqli_query($conexion, $sql);

$row = mysqli_fetch_array($resultado);


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDICIÓN DE TEXTOS</title>
</head>
<body>
    <form action="actualizar.php" method="POST">
        <label > Nombre </label>
        <input type="text" name="nombre" value="<?php echo $row['nombre']; ?>">
        <label > Autor/a</label>
        <input type="text" name="autor" value="<?php echo $row['autor']; ?>">
        <label > Año de publicación </label>
        <input type="text" name="autor" value="<?php echo $row['autor']; ?>">
        
        <input type="submit">
    </form>
    </form>
    
</body>
</html>