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

  <p>Actualice la página para mostrar dos dados.</p>

    
<?php
$dados1=rand(1,6);
$dados2=rand(1,6);
$suma=$dados1+$dados2;


print "<img src=\"img/dados/$dados1.svg\">";
print "<img src=\"img/dados/$dados2.svg\">";
print "<p>La suma de los dos numeros es $suma</p>";
?>

  <footer>
    <p>Julen Sanchez</p>
  </footer>
</body>
</html>