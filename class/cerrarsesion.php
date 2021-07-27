<?php 
session_start();
//siempre tengo que llamar session start
session_destroy();
echo "ha cerrado la sesión";
//destruye todas las demas sesiones abiertas 
header("refresh: 3, url = ../index.html")


?>