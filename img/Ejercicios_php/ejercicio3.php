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

  <p>Actualice la página para mostrar un emote distinto.</p>

  <table>
    <tbody>
<?php

$emoticono=rand(128512,128586);

print"&#$emoticono";



?>
    </tbody>
  </table>

  <footer>
    <p>Julen Sanchez</p>
  </footer>
</body>
</html>