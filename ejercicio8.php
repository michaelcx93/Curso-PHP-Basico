<?php

if($_POST){
    $valorA=$_POST['valorA'];
    $valorB=$_POST['valorB'];

    $suma=$valorA+$valorB;
    $resta=$valorA-$valorB;
    $divide=$valorA/$valorB;
    $multiplica=$valorA*$valorB;
    echo "La suma del valor A y valor B es = ".$suma."<br/>";
    echo "La resta del valor A y valor B es = ".$resta."<br/>";
    echo "La divicion del valor A y valor B es = ".$divide."<br/>";
    echo "La multiplicacion del valor A y valor B es = ".$multiplica."<br/>";

    echo "recuerda que valor A es ".$valorA.", "."y el valor B es ".$valorB;
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
    <form action="ejercicio8.php" method="post">
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

