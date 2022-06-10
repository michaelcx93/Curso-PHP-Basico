<?php

$txtNombre = "";
$rdgLenguaje="";

$chkphp= "";
$chkhtml= "";
$chkcss= "";

$lsAnime="";
$txtComentario="";

if ($_POST) {
    $txtNombre = (isset($_POST['txtNombre']))?$_POST['txtNombre'] : "";
    $rdgLenguaje = (isset($_POST['lenguaje']))?$_POST['lenguaje'] : "";
    
    $chkphp = ( isset($_POST['chkphp']) )?$_POST['chkphp'] : "";
    $chkhtml = ( isset($_POST['chkhtml']) )?$_POST['chkhtml'] : "";
    $chkcss = ( isset($_POST['chkcss']) )?$_POST['chkcss'] : "";

    $lsAnime=( isset($_POST['lsAnime']) )?$_POST['lsAnime']:"";

    $txtComentario=( isset($_POST['txtComentario']) )?$_POST['txtComentario']:"";

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <?php if($_POST){ ?>
        <strong> Hola </strong>: <?php echo $txtNombre."<br/>";?>
     
        <strong> Me gusta: </strong> 
        <?php echo $rdgLenguaje;?>
        <br>

        <strong> Estoy aprendiendo: </strong> 
        <?php echo $chkphp, $chkhtml, $chkcss;?>
        <br>

        <strong> Mi anime es: </strong>
        <?php echo $lsAnime;?>
        <br>
        <strong> Tu mensaje es:: </strong>
        <?php echo $txtComentario;?>
        <br>
    <?php } ?>

    <form action="ejercicio31.php" method="post">

    Nombre: <br/>
        <input value="<?php echo $txtNombre;?>" type="text" name="txtNombre" id="">
        <br/>

    ¿Te gusta?: <br/>
    <br/>php: <input type="radio" name="lenguaje" value="php" id=""><br/>
    <br/>html: <input type="radio" name="lenguaje" value="html" id=""><br/>
    <br/>css: <input type="radio" name="lenguaje" value="css" id=""><br/>

    Estas aprendiendo... <br>
    <br/> php:<input type="checkbox" name="chkphp" id="" value="php ">
    <br/> html:<input type="checkbox" name="chkhtml" id="" value="html ">
    <br/> css:<input type="checkbox" name="chkcss" id="" value="css "><br>

    ¿Que anime te gusta?
    <select name="lsAnime" id="">
        <option value="">[Ninguna Serie]</option>
        <option value="naruto" <?php echo ($lsAnime=="naruto")?"selected":"" ?> >Naruto</option>
        <option value="bleach" <?php echo ($lsAnime=="bleach")?"selected":"" ?> >Bleach</option>
        <option value="dragon" <?php echo ($lsAnime=="dragon")?"selected":"" ?> >Dragon Ball</option>
    </select>
    <br>
    ¿Tienes alguna duda? <br>
    <textarea name="txtComentario" id="" cols="30" rows="3">
        <?php echo $txtComentario; ?>
    </textarea>
    <br>
        
        <input type="submit" value="Enviar Informacion">

    </form>

</body>

</html>