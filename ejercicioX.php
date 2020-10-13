<?php
/**
 * Ejemplo de ejercicio sin formulario - ejemplo-sf-1.php
 *
 * @author alexander arevalo
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
    alexander arevalo
  </title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/estiloejercicio.css" title="Color">
</head>

<body>
  <h1>Ejemplo de ejercicio sin formulario 1</h1>

  <p>Actualice la página para mostrar dos nuevos colores.</p>

  <table>
    <tbody>
<?php

$vidas = 5;
$nombre = "alex";





print "<p> $vidas vidas </p>";/* para declarar variables $  pero con comillas dobles ("")*/;
print "<p>ewewewewewewewewe\$vidas </p>"; /*la contrabarra (\) para que aparezca las variables como tal por si  quieres poner el dolar*/;

$a = 3;
$b = 4;
print "<p>suma : $a + $b = ".($a + $b). "</p>" /*los .()." para concatenar sentencias*/;

$texto1 ="hola";
$texto2 ="y";
$texto3 ="adios";

$texto_total=$texto1." ".$texto2." ".$texto3;

print "<h1>$texto_total</h1>";

$ancho=3;

print "<p> la mesa tiene una anchura de {$ancho}m </p>"; /*el corchete hace la misma funcion que los .().*/

$alumnos =["julen", "jon nader", "algo","alguno"]; /*para declarar ma de una entidad en una variabe */

print "<p>el primero es: $alumnos[0]  "; /*para hacer print a una entidad concreta, numericamente empezando desde 0*/

$cuadrados = [3 => 9, 5=>25, 10=>100];/*estos son muemros asociados, para ello ponemos el =>*/
print "<p> el cuadrado de 3 es $cuadrados[3]";
print "<p> el cuadrado de 3 es $cuadrados[5]";
print "<p> el cuadrado de 10 es $cuadrados[10]";


$edades = ["irati"=>34,"julen"=>32, "jon ander"=>23, "kelya"=>18]; /*para hacerlo con palabras con comas*/

print "<p>la edad de irati es $edades[irati]";

$aleatorio =rand(1,50); /*para un numero aleatorio es el termino ran() en los parentesis pones los valores a aleatorizar*/

print "<p> el numero aleatorio es $aleatorio";

$c = 5;
$d = 7;

if($c>5){ /*para si es igual == mayour que 5 y menor que siete sria && "and" y para or || para is not != */
  print"<p>a es mayor que 5</p>";

}
else{
  print "<p> a no es mayor que 5 </p>";
}


$e = 5;
$f = 7;

if($e==5){  /* si en la condicion de no y quieres encadenar mas pones elseif*/
  print"<p>a no es 5</p>";

}
elseif($a<7){
  print "<p> es menor que 7 </p>";
}
else{
  print "<p> a no es mayor que 7</p>";
}

for($contador = 0; $contador <5; $contador++){   /*para repetir una sentencia*/
  print "<p> el valor es $contador</p>";

}


for($contador = 1; $contador <=6; $contador++){   /*para repetir una sentencia*/
  print "<img src=\"img/dados/$contador.svg\">";

}


?>

    </tbody>
  </table>

  <footer>
    <p>alexander arevalo</p>
  </footer>
</body>
</html>
