<?php

    if($_POST){
    //recivir informacion del formulario html, method:post
    $nombre=$_POST['txtNombre'];
    echo "Hola ".$nombre;
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Prueba 2</title>
</head>
<body>
    <h1>Hola Michael</h1>
    <form action="ejercicio2.php" method="post">
        Nombre:
        <input type="text" name="txtNombre" id="">
        <br>
        <input type="submit" value="Enviar">
    </form>
</body>
</html>