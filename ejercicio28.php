<?php
//conexion a la base de datos
$servidor="localhost"; // 127.0.0.1
$usuario="root";
$contrasena="";

try{

    $conexion=new PDO("mysql:host=$servidor;dbname=albun", $usuario,$contrasena );
    $conexion->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

    $sql="INSERT INTO `fotos` (`id`, `nombre`, `ruta`) VALUES (NULL, 'Jugando con la Programacion', 'foto.jpg');";
    $conexion->exec($sql);

    echo "Conexion Establecida";

}catch(PDOException $error){

    echo "Conexion erronea".$error;

}

?>