<?php
include_once 'conexion2.php'; //Para hacer la conexion una vez
print 'desde archivo index';

//Select desd la bd
$sql_select = "SELECT * FROM top_canciones";

print_r($_POST); //Este $cancion es distinto
if($_POST){
    $cancion = $_POST["cancion"];
    $disco = $_POST["disco"];

    if($cancion !="" and $disco !=""){
        $sql_insert = "INSERT INTO top_canciones(cancion, disco) VALUES (?,?)"; //Evitar fallos de hackeos, que llegen solo hasta ahí. ?? es por seguridad
    
        $sentencia_sql = $gbd->prepare($sql_insert);
        $sentencia_sql->execute(array($cancion, $disco));   
        
        header("location:index2.php");
    }
}
//Preparar y luego ejecutar
$sentencia_sql = $gbd-> prepare($sql_select);
$sentencia_sql ->execute();

$resultado = $sentencia_sql->fetchAll(); //Dar todos los resultados

if($_GET){
    $id = $_GET['id'];
    $sql_selected = "SELECT * FROM top_canciones WHERE id =?";

    $sentencia_sql = $gbd-> prepare($sql_selected);
    $sentencia_sql->execute(array($id));

    $resultado_id = $sentencia_sql->fetch();
}


?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Antonio José</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/css.css">
</head>
<style>
    table, th, td {
  border: 1px solid gold;
  margin: 5px;
  padding:5px;
  
}
</style>
<body>
    
<div class="flex-container">
        <div class="flex-container1"><img src="images/aj.jpg" height="250px"> </img></div>
        <div class="flex-container2"><p class="ajtexto">ANTONIO JOSÉ</p></div>
        </div>
        <div class="navbar">
        <div class="navbar">
        <a href="Proyecto1.html">Volver</a>     
    </div>
    <table>
    <?php
        foreach($resultado as $cancion){ //mirar cada valor
            print "<tr>
                    <td> 
                        $cancion[cancion]
                    </td>
                    <td>
                        $cancion[disco]
                    </td>
                    <td>
                        <a href='index2.php?id=$cancion[id]'>Editar &#128221</a>
                    </td>
                    <td>
                    <a href='delete2.php?id=$cancion[id]'>Eliminar &#128465</a>
                </td>
                </tr>";
        }
    ?>
    </table>

<?php if($_GET):?>  <!--haber si llega algo en metodo get-->

<form action="edit2.php" method="GET">
    <input type="hidden" name="id" value="<?php  print $resultado_id['id']?>">
    <p> <label for="cancion">Canción</label>
        <input type="text" name="cancion" value="<?php  print $resultado_id['cancion']?>">
    </p>
    <p> <label for="disco">Disco</label>
        <input type="text" name="disco" value="<?php  print $resultado_id['disco']?>">
    </p>
    <p><button>Editar</button></p>
</form>
<?php endif ?>
<p><a href="top_canciones.php">Añadir canción.</a></p>
</body>
</html>