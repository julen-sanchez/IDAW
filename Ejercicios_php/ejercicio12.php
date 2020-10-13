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

  <p>Actualice la página para mostrar un animal distinto.</p>

  <table>
    <tbody>
<?php

$animal=["ballena", "caballito-mar", "camello", "cebra", "elefante", "hipopotamo", "jirafa", "leon", "leopardo", "medusa", "mono", "oso-blanco", "oso", "pajaro", "pinguino", "rinoceronte", "serpiente", "tigre", "tortuga-marina", "tortuga"];
$aleatorio=rand(0,19);

print "<p><img src=\"img/animales/$animal[$aleatorio].svg\"</p>\n";



?>
    </tbody>
  </table>

  <footer>
    <p>Julen Sanchez</p>
  </footer>
</body>
</html>