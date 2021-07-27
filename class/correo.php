<?php 
echo "hola soy buscar ";

include "conexion.php";
echo "<pre>";
var_dump($_POST);
echo "</pre>";

$mensaje = "
<html>
<head>
    <title>HTML</title>
</head>
<body>
    <h1> Esto es un h1 </h1>
    <p>Esto es un parrafo en HTML</p>
</body>
</html>";

//no se puede alterar el orden de los parametros
//destinatario, asunto, mensaje, quién lo manda
mail($_POST['destinatario'],$_POST['asunto'],$mensaje, "From:Hexagono@gmail.com\nContent-Type: text/html; charset=iso-8859-1");

PRINT("Enviado");


?>