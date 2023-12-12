<?php
$frutas= array("n"=> "naranja", "m"=>"manzana", "p"=> "pera", "d"=>"durazno");
echo $frutas["n"]."<br/>";

foreach($frutas as $indice=>&$valor){
echo " La fruta es ".$valor." y su valor es ".$indice."<br/>";
}


$nombres = array("Nerea", "Santiago", "Fernanda", "Alejandro", "Marcela");

foreach($nombres as $indice=>&$nombre){
    echo $nombre."<br/>";
}
?>