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
  <h1>Ejercicio X</h1>

<?php

$temperatura = trim($_REQUEST['temperatura']);
$unidad = ($_REQUEST['unidad']);
$cambio=0;


if($temperatura == ""){
  print"<p>Sin valor</p>";
}elseif(is_numeric($_REQUEST['temperatura'])){
  print"<p>La temperatura es: $_REQUEST[temperatura] $_REQUEST[unidad]</p>";
}else{
  print "<p>Valor errorneo</p>";
}


if(($temperatura <= -273.15) && ($unidad =="celsius")){
print"Número inválido";
}elseif(($temperatura <= -459.67) && ($unidad=="fahrenheit")){
  print"Número inválido";
}elseif($unidad =="celsius"){
  $cambio=1.8*$temperatura+32;
  print"$cambio fahrenheit";
}elseif($unidad =="fahrenheit"){
  $cambio=($temperatura - 32) / 1.8;
  print"$cambio celsius";
}




?>

  <p><a href="form8.php">Volver al formulario.</a></p>

  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>
