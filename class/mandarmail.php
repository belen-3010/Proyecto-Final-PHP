<?php 
echo "hola soy buscar ";

include "conexion.php";
$valor0 = $_POST['id'];
$valor1 = $_POST['usuario'];
$valor2 = $_POST['libro'];
$valor3 = $_POST['autor'];
echo "<pre>";
var_dump($valor0);

echo "</pre>";
$consulta = "SELECT mail FROM usuarios WHERE libro = '$valor0'";
$query = mysqli_query($conexion,$consulta);
$mensaje = "
<html>
<head>
    <title>HOla quería pedir:</title>
</head>
<body>
   
    <p>$valor2</p>
    <p>Muchas gracias.</p>
    

</body>
</html>";
mail($consulta,"Hexágono, pedido de libro",$mensaje, "From:Hexagono@gmail.com\nContent-Type: text/html; charset=iso-8859-1");

var_dump($query);
?>