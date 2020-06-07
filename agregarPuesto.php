<?php

    require_once "clases/Puestos.php";

    if($_POST["nombre"] != ""){

        $Puesto = new Puestos;
        $Puesto->insertar($_POST);
        echo json_encode(array('success' => "1"));
        
    }
    else {
        echo json_encode(array('success' => "2"));
    }

?>