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

    echo "Recuerda que valor A es ".$valorA.", "."y el valor B es ".$valorB."<br/>";
    
    if ($valorA==$valorB) {
        echo "El valor de A es igual que B <br/>";
        if ($valorA==4) {
            echo "El valor es 4 <br/>";
        }
        if ($valorA==5) {
            echo "El valor de A es 5 <br/>";
        }
    }

    if(($valorA==$valorB) && ($valorA==4)){
        echo "El valor de A es igual a B y el numero es 4";
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
    <form action="ejercicio11.php" method="post">
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

