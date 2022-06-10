<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        require("ejercicio37_1.php");
    ?>

    <?php
        echo "Hola estoy en la pagina principal";
    ?>
</body>
</html>

//Este require es similar al include, con la diferencia que el include si tiene un error en el archivo que llama,
//muestra lo que tiene la pagina principal, pero tira un error haciendo referencia a la pagina que llama y el requiere
//si llega a tener un error no mostrara ni el contenido de la pagina principal ni el de la pagina que llama.

//Tambien podemos usar la opcion "include_once" lo que hace si tengo repedido 2 veces include("ejercicio37_1.php"); mostrara solo 1 y no 2
//Lo mismo pasa si ponemos require_once