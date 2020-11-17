<?php
include_once 'conexion2.php';
$id = $_GET['id'];

$sql_delete = "DELETE FROM top_canciones WHERE id=?";
$sentencia_sql = $gbd -> prepare($sql_delete);
$sentencia_sql -> execute(array($id));


header('location:index2.php');