<?php

function imprimirNombre($nombre, $apellido=""){
    //rutinas (instrucciones) -> al agregar (="") despues de la variable estamos diciendo que esa variable se
    //puede ir vacia, eje: $apellido="" // Sino lo hacemos y mandamos solo 1 varia tirara error. eje "Oscar"
    echo "Hola"." ".$nombre." ".$apellido."<br/>";
}
//Llamar la funcion
imprimirNombre("Oscar");
imprimirNombre("Pedro","Perez");
imprimirNombre("Michael","Calix");
imprimirNombre("Luis","Lopez");
imprimirNombre("Juan","Luc");

?>