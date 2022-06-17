<?php include("cabecera2.php"); ?>
<?php include("conexion.php"); ?>
<?php

if ($_POST) {
    print_r($_POST);

    $nombre = $_POST['nombre'];

    $fecha= new DateTime();
    $imagen = $fecha->getTimestamp()."_".$_FILES['archivo']['name'];

    $imagen_temp=$_FILES['archivo']['tmp_name'];
    move_uploaded_file($imagen_temp,"imagenes/".$imagen);

    $descripcion = $_POST['descripcion'];

    $objConexion = new conexion();
    $sql = "INSERT INTO `proyectos` (`id`, `nombre`, `imagen`, `descripcion`) VALUES (NULL, '$nombre', '$imagen', '$descripcion');";
    $objConexion->ejecutar($sql);
     header("location:portafolio.php");
}

if($_GET){
    //FROM proyectos WHERE `proyectos`.`id` = 16"

    $id=$_GET['borrar'];
    $objConexion = new conexion();

    $imagen= $objConexion->consultar("SELECT imagen FROM `proyectos` WHERE id=".$id);
    unlink("imagenes/".$imagen[0]['imagen']);

    $sql="DELETE FROM proyectos WHERE `proyectos`.`id` =".$_GET['borrar'];
    $objConexion->ejecutar($sql);
     header("location:portafolio.php");

}

$objConexion = new conexion();
$registros = $objConexion->consultar("SELECT * FROM `proyectos`");

?>


<div class="container">
    <div class="row">
        <div class="col-4">

            <div class="card">
                <div class="card-header">
                    Datos del Proyecto
                </div>
                <div class="card-body">
                    <form action="portafolio.php" method="post" enctype="multipart/form-data">

                        Nombre del Proyecto: <input required class="form-control" type="text" name="nombre" id=""> <br>
                        Imagen del Proyecto: <input required class="form-control" type="file" name="archivo" id=""> <br>
                    
                        <div class="mb-3">
                          <label for="" class="form-label">Descripción</label>
                          <textarea required class="form-control" name="descripcion" id="" rows="3"></textarea>
                        </div> <br>

                        <input class="btn btn-success" type="submit" value="Enviar Proyecto">

                    </form>
                </div>
            </div>

        </div>
        <div id="datatable" class="datatable col-8">

            <table class="scrollable">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>NOMBRE</th>
                        <th>IMAGEN</th>
                        <th>DESCRIPCION</th>
                        <th>ACCIONES</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($registros as $proyecto) { ?>
                        <tr>
                            <td><?php echo $proyecto['id']; ?></td>
                            <td><?php echo $proyecto['nombre']; ?></td>
                            <td>
                                <img  width="100" src="imagenes/<?php echo $proyecto['imagen']; ?>" class="imgr borderedbox inspace-5" alt="">                            
                        
                        </td>
                            <td><?php echo $proyecto['descripcion']; ?></td>
                            <td><a name="" id="" class="btn btn-danger" href="?borrar=<?php echo $proyecto['id']; ?>">Eliminar</a></td>
                        </tr>
                    <?php } ?>
                </tbody>
            </table>

        </div>

    </div>
</div>



<?php
include("pie.php")
?>

