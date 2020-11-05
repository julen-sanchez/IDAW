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
  <h1>Ejercicio 7</h1>

<?php

print_r($_REQUEST);
$nombre = trim($_REQUEST["Nombre"]);
$apellido = trim($_REQUEST["Apellido"]);
$edad = trim($_REQUEST["Edad"]);
$peso = trim($_REQUEST["Peso"]);  





if($nombre == ""){
  print "//Nombre no introducido//";
}else{
  print "//Nombre: $nombre";
}


if($apellido == ""){
  print "//Apellido no introducido//";
}else{
  print "//Apellido: $apellido";
}


if($edad == ""){
  print "//Edad no introducido//";
}else{
  print "//Edad: $edad";
}


if($peso == ""){
  print "//Peso no introducido//";
}else{
  print "//Peso: $peso";
}


if (isset($_REQUEST ["sexo"])) {
    $sexo = $_REQUEST["sexo"];
    if ($sexo == "Hombre") {
        print "/Hombre";
    } else {
        print "/Mujer";
    }
}


if (isset($_REQUEST ["estadocivil"])) {
    $estadocivil = $_REQUEST["estadocivil"];
    if ($estadocivil == "Solter@") {
        print "/Solter@";
    } elseif ($estadocivil == "Casad@") {
        print "/Csad@";
    } else {
        print "/Otro";
    }
}

$aficiones=['cine','literatura','comics','deporte','musica','television'];
foreach($aficiones as $aficion){
  if(isset($_REQUEST[$aficion])){
    print "///Has elegido $aficion";
  }
}


?>

  <p><a href="form7.php">Volver al formulario.</a></p>

  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>