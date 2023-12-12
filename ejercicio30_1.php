<?php

session_start();

if(isset($_SESSION["usuario"])){

    echo $_SESSION["usuario"]."  estatus: ".$_SESSION["estatus"];
}else{
    echo "no hay datos";
}

?>