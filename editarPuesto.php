<?php

    require_once "clases/Puestos.php";

    if($_POST["id"] != "")
    {
        $Puesto = new Puestos;
        $Puesto->editar($_POST);
        echo json_encode(array('success' => "1"));
    }
    else {
        echo json_encode(array('success' => "2"));
    }

?>