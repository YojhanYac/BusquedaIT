<?php

    require_once "clases/BaseDeDatos.php";

    $resultado = new BaseDeDatos();
    $valores = $resultado->mostrarPorId($_POST['tabla'], $_POST['id']);
    // $valores = $resultado->mostrarPorId("puestos", 9);


    if($valores){
        $myJSON = json_encode($valores);
        echo $myJSON;
    }
    else{
        return false;
    }
?>