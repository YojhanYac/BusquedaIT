<?php

    require_once "clases/BaseDeDatos.php";

    if($_POST['id'] != "" && $_POST['tabla'] != ""){

        $resultado = new BaseDeDatos();
        $valores = $resultado->mostrarPorId($_POST['tabla'], $_POST['id']);

        if($valores){
            $myJSON = json_encode($valores);
            echo $myJSON;
        }
        else{
            return false;
        }   
    }
    else{
        return false;
    }
?>