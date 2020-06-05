<?php 

    require_once "clases/BaseDeDatos.php";

    if($_POST["id"] != "")
    {
        $resultado = new BaseDeDatos();
        $valores = $resultado->eliminar($_POST['tabla'], $_POST['id']);

        echo json_encode(array('success' => "1"));
    }
    else {
        echo json_encode(array('success' => "2"));
    }

?>