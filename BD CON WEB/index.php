<?php
include_once 'conexion.php'; //Para hacer la conexion una vez
print 'desde archivo index';

//Select desd la bd
$sql_select = "SELECT * FROM colores";

print_r($_POST); //Este $color es distinto
if($_POST){
    $color = $_POST["color"];
    $descripcion = $_POST["descripcion"];

    if($color !="" and $descripcion !=""){
        $sql_insert = "INSERT INTO colores(color, descripcion) VALUES (?,?)"; //Evitar fallos de hackeos, que llegen solo hasta ahí. ?? es por seguridad
    
        $sentencia_sql = $gbd->prepare($sql_insert);
        $sentencia_sql->execute(array($color, $descripcion));   
        
        header("location:index.php");
    }
}
//Preparar y luego ejecutar
$sentencia_sql = $gbd-> prepare($sql_select);
$sentencia_sql ->execute();

$resultado = $sentencia_sql->fetchAll(); //Dar todos los resultados

if($_GET){
    $id = $_GET['id'];
    $sql_selected = "SELECT * FROM colores WHERE id =?";

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
    <title>Colores</title>
</head>
<body>
    <table>
    <?php
        foreach($resultado as $color){ //mirar cada valor
            print "<tr style=\"background-color:$color[color]\">
                    <td> 
                        $color[color]
                    </td>
                    <td>
                        $color[descripcion]
                    </td>
                    <td>
                        <a href='index.php?id=$color[id]'>Editar &#128221</a>
                    </td>
                    <td>
                    <a href='delete.php?id=$color[id]'>Eliminar &#128465</a>
                </td>
                </tr>";
        }
    ?>
    </table>

<?php if(!$_GET):?>  <!--aer si no llega algo en metodo get-->

    <form action="index.php" method="POST">
        <p> <label for="color">Color</label>
            <input type="text" name="color">
        </p>
        <p> <label for="descripcion">Descripción</label>
            <input type="text" name="descripcion">
        </p>
        <p><button>Añadir</button></p>
    </form>
<?php endif ?>

<?php if($_GET):?>  <!--aer si llega algo en metodo get-->

<form action="edit.php" method="GET">
    <input type="hidden" name="id" value="<?php  print $resultado_id['id']?>"
    <p> <label for="color">Color</label>
        <input type="text" name="color" value="<?php  print $resultado_id['color']?>">
    </p>
    <p> <label for="descripcion">Descripción</label>
        <input type="text" name="descripcion" value="<?php  print $resultado_id['descripcion']?>">
    </p>
    <p><button>Editar</button></p>
</form>
<?php endif ?>
</body>
</html>