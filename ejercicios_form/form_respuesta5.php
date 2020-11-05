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
  <h1>Ejercicio 5</h1>

<?php
$correo = trim($_REQUEST["correo"]);
$correo2 = trim($_REQUEST["correo2"]);



if(filter_var($correo, FILTER_VALIDATE_EMAIL)){
  echo $correo.'<br>';
  if($correo == $correo2){
    print "Son iguales//";
  }else{
    print "No son iguales//";
  }
  print "//Es correcto//";
}else{
  print "//No es correcto//";  
}



if(isset($_REQUEST["aceptar"])){
  print "//Recibiras correos";
}
else{
  print "//No recibiras correo";
}


?>

  <p><a href="form5.php">Volver al formulario.</a></p>

  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>
