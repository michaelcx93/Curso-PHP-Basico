<?php

class persona
{
    public $nombre; //propiedades
    private $edad; //esta propiedad no permite imprimir esta variable al estar en private
    //protected $altura; //

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

class trabajador extends persona{
    public $puesto; //propiedad trabajador
    public function PresentarTrabajador(){
        echo "Hola soy ".$this->nombre." y soy un ".$this->puesto;
    }
}

$objTrabajador = new trabajador(); //instancia o creacion del objeto
$objTrabajador->asignarNombre("Andre Calix"); //aqui llamamos un metodo
$objTrabajador->puesto="profesor";

$objTrabajador->PresentarTrabajador();

?>