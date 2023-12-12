<?php
class Persona {

public $nombre; 
private $edad;

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

$objPersona = new Persona();
$objPersona->asignarNombre("Nerea");
echo $objPersona->nombre."<br/>";
$objPersona->saludar();
echo $objPersona->mostrarEdad();


/* class Animal{

    public $raza;

    public function asignarRaza($nuevaRaza){
        $this->raza=$nuevaRaza;
    }
}

$nuevoAnimal = new Animal();
$nuevoAnimal->asignarRaza("Gato");
$nuevoAnimal2 = new Animal();
$nuevoAnimal2->asignarRaza("perro");

echo $nuevoAnimal->raza."<br/>";
echo $nuevoAnimal2->raza."<br/>"; */
?>