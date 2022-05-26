<?php

class persona
{
    public $nombre; //propiedades
    private $edad; //esta propiedad no permite imprimir esta variable al estar en private
    protected $altura; //

    function __construct($nuevoNombre){
        $this->nombre=$nuevoNombre;
    }

    public function asignarNombre($nuevoNombre)
    {  //acciones o metodos
        $this->nombre = $nuevoNombre . "<br/>";
    }

    public function imprimirNombre()
    {
        echo "Hola soy " . $this->nombre;
    }

    public function mostrarEdad()
    {
        $this->edad = 20;
        return $this->edad;
    }
}



$objAlumno = new persona("Mikael Andre"); //instancia o creacion del objeto
//$objAlumno->asignarNombre("Michael"); //aqui llamamos un metodo

$objAlumno->imprimirNombre(); //aqui llamamos un metodo


?>