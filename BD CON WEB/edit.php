<?php   
    // Leer lo que nos llega
    $id = $_GET["id"];
    $color = $_GET["color"];
    $descripcion = $_GET["descripcion"];

    include_once 'conexion.php'; //Para usar la base de datos

    // Sentencia Update
    $sql_update = "UPDATE colores SET color=?, descripcion=? WHERE id=?"; 
    $sentencia_sql = $gbd -> prepare($sql_update);
    $sentencia_sql -> execute(array($color,$descripcion,$id));

    header("location:index.php");

?>
