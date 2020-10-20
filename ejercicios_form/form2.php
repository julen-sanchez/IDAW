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
  <h1>Ejercicio con formularios 2</h1>

  <form action="form_respuesta2.php" method="GET">


<?php


$frutas=["cerezas","fresa","limon","manzana","naranja","pera"];

for ($i=0;$i<6;$i++){
  print "<p><input type=\"radio\"name=\"fruta\" value=\"$frutas[$i]\"><label for=\"fruta\">$frutas[$i]</label></p>\n";
}

?>
    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>

  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>