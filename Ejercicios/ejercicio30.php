<?php

session_start();

$_SESSION["usuario"]="exor";
$_SESSION["status"]="logueado";

echo "Sesion iniciada".":<br/>";

echo "Usuario: ".$_SESSION["usuario"]."<br/> status: ".$_SESSION["status"];


?>