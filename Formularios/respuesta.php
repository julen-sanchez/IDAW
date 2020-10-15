<?php
    $nombre = trim($_REQUEST["Nombre"]);


    print "<pre>";
    print_r($_REQUEST);
    print "</pre>";



    if($nombre == ""){
        print "Nombre no introducido/";
    }else{
        print "Nombre: $nombre";
    }



    if(isset($_REQUEST["aceptar"])){
        print "/Has aceptado las condiciones";
    }
    else{
        print "/No has aceptado las condiciones";
    }




    if(isset($_REQUEST ["ciclos"])){
        $ciclos = $_REQUEST["ciclos"];
        if($ciclos == "DAW"){
            print "/Vas a hacer paginas web";
        }
        elseif($ciclos == "DAM"){
            print "/Vas a hacer videjuegos";
    }
    else{
        print "/Vas montar y administrar bases de datos y redes";
    }



if (isset($_REQUEST["intereses2"])) {
    print "/Tiene interes";
    $intereses2 = $_REQUEST["intereses2"];
    foreach($intereses2 as $interes){
        print "<p>Estas interesado en $interes.</p>";
    }
}
    else{
        print "/No tiene interes";
    }
}

?>