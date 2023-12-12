<?php
class Persona {

public $nombre; 
private $edad;

function __construct($nuevoNombre){
    $this->nombre=$nuevoNombre;

}

public function asignarNombre($nuevoNombre){
    $this->nombre=$nuevoNombre;
}

public function saludar(){
    echo "Hola soy ".$this->nombre."<br/>";
}

public function mostrarEdad(){
    $this->edad=21;
    return $this->edad;
}

}

$objPersona = new Persona("Neru");
/* $objPersona->asignarNombre("Nerea"); */
$objPersona->saludar();



?>