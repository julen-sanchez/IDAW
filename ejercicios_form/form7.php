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
  <h1>Ejercicio con formularios 7</h1>
  <form action="form_respuesta7.php" method="get">
    <!-- Añade aquí los elementos de formulario necesarios -->
    <label for="nombre"><b>Nombre</b></label><input type="text" name="Nombre">
    <label for="apellido"><b>Apellido</b></label><input type="text" name="Apellido">
    <label><b>Edad:</b></label>
    <select name="Edad">
      <?php

      for($edad=1;$edad<=120;$edad++){

        print "<option>$edad</option>";

      }

      ?>
    </select> 
    <p><label for="peso"><b>Peso:</b></label><input type="text" name="Peso">Kg

    <b>Sexo:</b>
    <input type="radio" name="sexo" value="Hombre"><label
    for="ciclos">Hombre</label>
    <input type="radio" name="sexo" value="Mujer"><label
    for="ciclos">Mujer</label></p>

    <p><b>Estado civil:</b></p>
    <input type="radio" name="estadocivil" value="Solter@"><label
    for="ciclos">Solter@</label>
    <input type="radio" name="estadocivil" value="Casad@"><label
    for="ciclos">Casad@</label>
    <input type="radio" name="estadocivil" value="Otro"><label
    for="ciclos">Otro</label>
  </p>

  <b>Aficiones:</b>
  <p><input type="Checkbox" name="cine"> <label
    for="aficiones">Cine</label>
   <input type="Checkbox" name="literatura"> <label
    for="aficiones">Literatura</label>
    <input type="Checkbox" name="comics"> <label
   for="aficiones">Comics</label></p>

  <p><input type="Checkbox" name="deporte"> <label
    for="aficiones">Deporte</label>
    <input type="Checkbox" name="musica"> <label
    for="aficiones">Música</label>
    <input type="Checkbox" name="television"> <label
    for="aficiones">Television</label></p>





    <p>
      <input type="submit" value="Enviar">
      <input type="reset" value="Borrar">
    </p>
  </form>
  <footer>
    <p>Julen Sanchez Alonso</p>
  </footer>
</body>
</html>