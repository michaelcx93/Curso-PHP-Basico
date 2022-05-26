<?php

session_start();

if(isset($_SESSION["usuario"])){
    echo "Usuario: ".$_SESSION["usuario"]."<br/> status: ".$_SESSION["status"];
}else{
    echo "no hay datos";
}

?>