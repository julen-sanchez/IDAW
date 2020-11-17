<?php   
    // Leer lo que nos llega
    $id = $_GET["id"];
    $cancion = $_GET["cancion"];
    $disco = $_GET["disco"];

    include_once 'conexion2.php'; //Para usar la base de datos

    // Sentencia Update
    $sql_update = "UPDATE top_canciones SET cancion=?, disco=? WHERE id=?"; 
    $sentencia_sql = $gbd -> prepare($sql_update);
    $sentencia_sql -> execute(array($cancion,$disco,$id));

    header("location:index2.php");

?>
