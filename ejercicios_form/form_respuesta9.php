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
  <h1>Ejercicio 9</h1>
  <table>
<?php
$numero = trim($_REQUEST['numero']);


if($numero<=100 && $numero>=0){
print "<table>";
  for ($i=1; $i<=$numero; $i++) {
    print "<tr>";
    for ($j=1; $j<=$numero; $j++) {
      $valor=$j*$i;
      print "<td> $valor <td>";
    }
    print "</tr>";
  }
print "</table>";
}else{
  print"No has puesto un valor válido";
}
?>
</table>
  <p><a href="form9.html">Volver al formulario.</a></p>

  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>
