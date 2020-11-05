<?php

$link = 'mysql:host=localhost;dbname=colores'; //Ruta de la máquina y la base de datos
$usuario = 'root';
$pwd = ''; //Contraseña que no tiene

//La variable que tiene la conexion es gbd
//$gbd = new PDO($link, $usuario, $pwd) //gestor base de datos PDO se encarga de usar las  diferentes bases de datos 
// print "Conectado";

try {
    $gbd = new PDO($link, $usuario, $pwd); 
    print "Conectado";
} catch (PDOException $e){
    print "Error: ". $e-> getMessage()."<br/>";
    die(); //Que no haga na mas
}