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

class Trabajador extends Persona{
    public $puesto;

    public function presentarse(){
        echo "Hola soy ".$this->nombre." y soy una ".$this->puesto;
    }

}
$objTrabajador = new Trabajador();
$objTrabajador->asignarNombre("Nerea");
$objTrabajador->puesto="Programadora";
/* echo $objTrabajador->puesto; */
echo $objTrabajador->presentarse();

?>