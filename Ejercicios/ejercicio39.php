<?php

$nombreArchivo="archivo.txt";
$contenidoArchivo=" Hola, saludos";

$archivoCrear= fopen($nombreArchivo,"w"); //aqui creamos el archivo y con la "w" desimos que lo escribiremos (write)

fwrite($archivoCrear,$contenidoArchivo); //con fwrite escribimos en ese archivo

fclose($archivoCrear); //aqui es la sentencia de cerrar

?>