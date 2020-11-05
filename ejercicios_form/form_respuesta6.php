<?php
/**
 * Controles en formularios
 *
 * @author Escriba aquí su nombre
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Controles en formularios 
    Julen Sanchez Alonso
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="mclibre-php-ejercicios.css" title="Color">
</head>

<body>
  <h1>Ejercicio 6</h1>

<?php
//print_r($_REQUEST);
$opcion=$_REQUEST['opcion'];
$tamaño=$_REQUEST['tamaño'];


if($opcion =="cuadrado"){
  print "<svg width=\"400\" height=\"110\">
<rect width=\"$tamaño\" height=\"$tamaño\" style=\"fill:red;stroke-width:0px;stroke:rgb(0,0,0)\">
</svg>";;
}elseif($opcion =="circulo"){
    print "<svg width=\"100\" height=\"100\">
<circle circle cx=\"50\" cy=\"50\" r=\"$tamaño\" style=\"fill:blue;stroke-width:0px;stroke:rgb(0,0,0)\">
</svg>";
}
?>

  <p><a href="form6.php">Volver al formulario.</a></p>

  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>
