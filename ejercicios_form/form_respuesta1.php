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
  <h1>Ejercicio 1</h1>

<?php
//print "<pre>";
//print_r($_REQUEST);
//print "</pre>";

$tamaño=$_REQUEST['tamaño'];
$grosor=$_REQUEST['grosor'];
$color=$_REQUEST['intereses'];

if($tamaño !=""){
  print "<p>Tamaño introducido</p>";
}else{
  print "<p>Tamaño no introducido</p>";
}


if($grosor !=""){
  print "<p>Grosor introducido</p>";
  print "<svg width=\"400\" height=\"110\">
<rect width=\"$tamaño\" height=\"$tamaño\" style=\"fill:$color;stroke-width:$grosor;stroke:rgb(0,0,0)\">
</svg>";;
}else{
  print "<p>Grosor no introducido</p>";
}



?>

  <p><a href="form1.php">Volver al formulario.</a></p>

  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>