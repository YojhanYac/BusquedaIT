<?php 

require_once "clases/BaseDeDatos.php";

if($_POST["puesto"] != ""){

    $resultado = new BaseDeDatos();
    $valores = $resultado->buscadorPuesto($_POST['tabla'], $_POST['puesto']);

    if($valores != false){
        $valores = array_reverse($valores);
        $myJSON = json_encode($valores);
        echo $myJSON;
    }
    else{
        echo "false";
    }
}
else{
    return false;
}

?>