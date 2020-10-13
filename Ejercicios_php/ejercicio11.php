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

  <p>Actualice la página para mostrar los dados.</p>

    
<?php
$dados=rand(1,6);
$dadoazar=rand(1,10);
$par=0;
$impar=0;

print "<p>Comienzo</p>\n";
for ($i = 0; $i < $dadoazar; $i++) {
    $dados=rand(1,6);
    if($dados & 1) {
        $impar++;/*++ es igual que poner +1*/
    } else {
        $par++;
    }  
    print "<img src=\"img/dados/$dados.svg\">";
}
print "<p>Número de pare:$par</p>";
print "<p>Número de impare:$impar</p>";
?>

  <footer>
    <p>Julen Sanchez</p>
  </footer>
</body>
</html>