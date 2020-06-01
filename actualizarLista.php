<?php

    require_once "clases/BaseDeDatos.php";

    $resultado = new BaseDeDatos();
    $valores = $resultado->mostrar($_POST['tabla']);
    $valores = array_reverse($valores);


    if($valores){
        $myJSON = json_encode($valores);
        echo $myJSON;
    }
    else{
        return false;
    }

?>