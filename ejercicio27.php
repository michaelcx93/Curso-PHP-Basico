<?php

class UnaClase{
    public static function unMetodo(){
        echo "Hola soy un metodo estático <br/>";
    }
}
//aqui llamamos el metodo por instancia
$obj=new UnaClase();
$obj->unMetodo();

//aqui lo llamamos sin necesidad de una instancia
UnaClase::unMetodo();


?>