<?php

$frutas=array("Manzana", "Pera", "Frutilla");
array_push($frutas, "uva");

foreach($frutas as $indice=>&$fruta){
    echo $fruta."<br/>";
}


?>