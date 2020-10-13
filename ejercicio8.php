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

  <p>Actualice la página para mostrar de 1-10 circulos.</p>

    
<?php
$rojo=rand(0,255);
$verde=rand(0,255);
$azul=rand(0,255);
$color=("rgb($rojo,$verde,$azul)");
$circuloazar=rand(1,10);



for ($i = 0; $i < $circuloazar; $i++) {
$rojo=rand(0,255);
$verde=rand(0,255);
$azul=rand(0,255);
$color=("rgb($rojo,$verde,$azul)");
print"<svg height=\"100\" width=\"100\">";
print"<circle cx=\"50\" cy=\"50\" r=\"40\" stroke=\"black\" stroke-width=\"3\" fill=\"$color\" />";
print"</svg>";
}




?>

  <footer>
    <p>Julen Sanchez</p>
  </footer>
</body>
</html>