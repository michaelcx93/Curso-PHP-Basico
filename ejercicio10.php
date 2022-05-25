<?php

/*  //operador "and" -> "y"
    if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if (($valorA != $valorB) &&($valorA > $valorB)) {
        echo "El valor de A es diferente al valor B y tambien es mayor";
    }
} */

//operador "or" || "o"
if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    if (($valorA != $valorB) &&($valorA || $valorB)) {
        echo "Se cumple una de las 2 condiciones; A y B son diferentes o A es mayor que B";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operadores matematicos</title>
</head>
<body>
    <form action="ejercicio10.php" method="post">
        valor A:
        <input type="text" name="valorA" id="">
        <br>
        valor B:
        <input type="text" name="valorB" id="">
        <br>
        <input type="submit" value="Calcular">
    </form>
</body>
</html>

