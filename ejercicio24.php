<?php

class persona
{
    public $nombre; //propiedades
    private $edad; //esta propiedad no permite imprimir esta variable al estar en private
    protected $altura; //

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



$objAlumno = new persona(); //instancia o creacion del objeto
$objAlumno->asignarNombre("Michael"); //aqui llamamos un metodo

echo $objAlumno->nombre; //imprimir propiedad

$objAlumno2 = new persona();
$objAlumno2->asignarNombre("Andre");

echo $objAlumno2->nombre; //imprimir propiedad
echo $objAlumno2->imprimirNombre();
echo $objAlumno2->mostrarEdad();

echo $objAlumno2->edad; //esta variable esta protegida con su funcion asignada "private/protected"
echo $objAlumno2->altura; //esta variable esta protegida con su funcion asignada "private/protected"
