<?php include("cabecera2.php"); ?>
<?php include("conexion.php"); ?>

<?php
$objConexion = new conexion();
$registros = $objConexion->consultar("SELECT * FROM `proyectos`");

?>

<div class="p-5 bg-light">
  <div class="container">
    <h1 class="display-3">Bienbenidos</h1>
    <p class="lead">A mi portafolio</p>
    <hr class="my-2">
    <p>Mas Información</p>

  </div>
</div>

<div class="row row-cols-1 row-cols-md-3 g-4">

  <?php foreach ($registros as $proyecto) { ?>

    <div class="col">
      <div class="card h-100">
        <img src="imagenes/<?php echo $proyecto['imagen']; ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo $proyecto['nombre']; ?></h5>
          <p class="card-text"><?php echo $proyecto['descripcion']; ?></p>
        </div>
        <div class="card-footer">
          <small class="text-muted">Last updated 3 mins ago</small>
        </div>
      </div>
    </div>

  <?php } ?>

</div>

<?php
include("pie.php")
?>