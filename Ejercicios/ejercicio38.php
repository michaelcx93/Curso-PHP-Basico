<?php
//abriendo un archivo para leer el contenido (fopen-> lo abre) (fread-> Lo lee)
$archivo= "contenido.txt";

$archivoAbierto=fopen($archivo,"r");

$contenido=fread($archivoAbierto,filesize($archivo));

echo $contenido;

?>