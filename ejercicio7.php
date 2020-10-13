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
$jugador1_1=rand(1,6);
$jugador1_2=rand(1,6);
$jugador1_3=rand(1,6);




$jugador2_1=rand(1,6);
$jugador2_2=rand(1,6);
$jugador2_3=rand(1,6);

$trio1 = false;
$trio2 = false;

$pareja1 = false;
$vpareja1 =0;
$pareja2 = false;
$vpareja2 = 0;

$suma1 =$jugador1_1+$jugador1_2+$jugador1_3;
$suma2 =$jugador2_1+$jugador2_2+$jugador2_3;


print"<div style=\"background-color:blue\">";
print"<p>JUGADOR 1</p>";
print "<img src=\"img/dados/$jugador1_1.svg\">";
print "<img src=\"img/dados/$jugador1_2.svg\">";
print "<img src=\"img/dados/$jugador1_3.svg\">";
print"</div>";

print"<div style=\"background-color:red\">";
print"<p>JUGADOR 2</p>";
print "<img src=\"img/dados/$jugador2_1.svg\">";
print "<img src=\"img/dados/$jugador2_2.svg\">";
print "<img src=\"img/dados/$jugador2_3.svg\">";
print"</div>";
/*Mirar si los jugadores tienen trios o parejas*/
if($jugador1_1==$jugador1_2 && $jugador1_2==$jugador1_3){
  $trio1=true;
}elseif($jugador1_1==$jugador1_2){
  $pareja1 = true;
  $vpareja1 = $jugador1_1;
}elseif($jugador1_1==$jugador1_3){
  $pareja1 = true;
  $vpareja1 = $jugador1_1;
}elseif($jugador1_2==$jugador1_3){
  $pareja1 = true;
  $vpareja1 = $jugador1_2;
}

  



if($jugador2_1==$jugador2_2 && $jugador2_2==$jugador2_3){
  $trio2=true;
}elseif($jugador2_1==$jugador2_2){
  $pareja2 = true;
  $vpareja2 = $jugador2_1;
}elseif($jugador2_1==$jugador2_3){
  $pareja2 = true;
  $vpareja2 = $jugador2_1;
}elseif($jugador2_2==$jugador2_3){
  $pareja2 = true;
  $vpareja2 = $jugador2_2;
}

/* Si los dos tienen trio gana el valor mas alto */
if($trio1==true && $trio2==true){
  if($jugador1_1>$jugador2_1){
    print "<p>Gana jugador 1</p>";
  }
  elseif($jugador1_1>$jugador2_1){
    print "<p>Gana jugador 2</p>";
  }
  else{/*Si los trios son iguales*/
    print "<p>Empate</p>";
  }
}
/*Si uno no tienen trios...*/
else{
  if($trio1 == true && $trio2 == false){
    print "<p>Gana jugador 1</p>";
  }elseif ($trio2 == true && $trio1 == false){
    print "<p>Gana jugador 2</p>";
  }
  else
  /*Si ninguno de los dos tiene trio*/
  if ($pareja1==true && $pareja2) {
      if ($vpareja1>$vpareja2) {
          print "<p>Gana jugador 1</p>";
      } elseif ($vpareja2>$vpareja1) {
          print "<p>Gana jugador 2</p>";
      } else{
          $suma1 = $jugador1_1+$jugador1_2+$jugador1_3;
          $suma2 = $jugador2_1+$jugador2_2+$jugador2_3;
          if($suma>$suma2){
            print "<p>Gana jugador 1</p>";
          }else{
            print  "<p>Gana jugador 2</p>";

          }
     }
  }elseif($pareja1==true && $pareja2==false){
    print "<p>Gana jugador 1</p>";
  }elseif ($pareja2==true && $pareja1==false){
    print "<p>Gana jugador 2</p>";
  }
}




?>

  <footer>
    <p>Julen Sanchez</p>
  </footer>
</body>
</html>