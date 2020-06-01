<?php

    require_once "clases/Puestos.php";

    if($Puesto = new Puestos($_POST)){
        echo json_encode(array('success' => "1"));
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>
        Puesto agregado!
    </h1>
    <h3>Datos:</h3>
    <p><?php $Puesto->mostrar();?></p>
</body>
</html>