<?php

session_start();
$_SESSION["usuario"]="Nerea";
$_SESSION["estatus"]="Logueado";

echo "Sesion iniciada".":<br/>";
echo "usuario: ".$_SESSION["usuario"]."  estatus: ".$_SESSION["estatus"];

?>