<?php

class unaClase{
    public static function unMetodo(){
        echo "Hola soy un metodo estatico"."<br/>";
    }
}
$obj = new unaClase();
$obj->unMetodo();

//como lo podemos llamar sin instanciar gracias al metodo estatico
unaClase::unMetodo();
?>