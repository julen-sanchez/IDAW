<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author Julen Sanchez
 *
 */
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="utf-8">
  <title>
    Ejemplo de ejercicio sin formulario.
    Ejemplos.
    Julen Sanchez
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar tres cartas.</p>

    
<?php
$carta1=rand(1,10);
$carta2=rand(1,10);
$carta3=rand(1,10);

if ($carta1 > $carta2 and $carta1 > $carta3) {
  echo "Carta 1 es mayor";
} elseif ($carta2 > $carta1 and $carta2 > $carta3) {
  echo "Carta 2 es mayor";
} else { 
  echo "Carta 3 es mayor";
}


print "<img src=\"img/cartas/c$carta1.svg\">";
print "<img src=\"img/cartas/c$carta2.svg\">";
print "<img src=\"img/cartas/c$carta3.svg\">";


?>

  <footer>
    <p>Julen Sanchez</p>
  </footer>
</body>
</html>