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
//El trim es para que no tenga espacios
$nombre = trim($_REQUEST["nombre"]);

if($nombre == ""){
  print "<p>Nombre no introducido.</p>\n";
}else{
    print "<p>Nombre: $_REQUEST[nombre]</p>\n";
}

$apellido = trim($_REQUEST["apellido"]);

if($apellido == ""){
  print "<p>Apellido no introducido.</p>\n";
}else{
    print "<p>Apellido: $_REQUEST[apellido]</p>\n";
}

?>

  <p><a href="form4.php">Volver al formulario.</a></p>

  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>
