        <?php
        include("cabecera.php");
        ?>

<div class="p-5 bg-light">
    <div class="container">

        <form action="portafolio.php" method="post"></form>

        Nombre del Proyecto: <input class="form-control" type="text" name="nombre" id=""> <br>
        Imagen del Proyecto: <input class="form-control" type="file" name="archivo" id=""> <br>

        <input type="submit" value="Enviar Proyecto">

    </div>
</div>

<?php
include("pie.php")
?>