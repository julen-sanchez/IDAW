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
  <h1>Ejercicio 3</h1>

<?php


$letra=$_REQUEST["letra"];
$fondo=$_REQUEST["fondo"];

print "<p>Los colores elegidos:</p>";
print_r($_REQUEST); 
print "<p style='color:$letra; background-color:$fondo; font-size:50px;'>Me olvidé de los consejos susurrados de tu boca...</p>";


?>

  <p><a href="form3.php">Volver al formulario.</a></p>

  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>
