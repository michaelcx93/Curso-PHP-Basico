<?php

$frutas=array("f"=>"fresa","m"=>"manzana","p"=>"pera");
print_r($frutas);

echo $frutas["p"]."<br/>";
foreach ($frutas as $indice =>&$valor){
    echo "El valor ".$valor." Tiene el Indice ".$indice."<br/>";

    /* echo $frutas[$indice]."<br/>"; */
}

?>