<?php

    require_once "clases/BaseDeDatos.php";

    $valor = new BaseDeDatos();

    $valor = $valor->graficos('puestos');
    $buffArray = [];
    $valueArray = "";
    $arrayData = [];
    $nameValue = "habilidadesTecnicas";
    $find = 0;
    $cantArray = [];

    for( $i = 0; $i < count($valor); $i++){ //recorre todas las posiciones de la tabla puestos

        $valueArray = $valueArray . ", " . $valor[$i][$nameValue]; //filtro para guardar solo los datos en un string
        $buffArray = explode(", ", $valueArray); //separamos los datos que están dentro de las ',' y se guardan en el array

        for($v = 1; $v < count($buffArray); $v++){ //recorre el array con los datos guardados
            
            if(empty($arrayData)){
                $arrayData[] = $buffArray[$v];
                $cantArray[$buffArray[$v]] = 1;
            }
            else{
                for($x = 0; $x < count($arrayData); $x++){
                    if($arrayData[$x] == $buffArray[$v]){
                        $cantArray[$buffArray[$v]]++;
                        $find = true;
                        break;
                    }
                    else{
                        $find = false;
                    }
                }
                if($find != true){
                    $arrayData[] = $buffArray[$v];
                    $cantArray[$buffArray[$v]] = 1;
                    $find = false;
                }
            }
        }
        $valueArray = "";
    }


    // Generar Ranking

    $arrayJS = [[]];

    for($i = 0; $i < count($arrayData); $i++){
        $arrayJS[$i] = [$arrayData[$i], $cantArray[$arrayData[$i]], 'false' ];
    }
       
    $cantRanking = 12;
    $countR = 0;
    $primerosCargados = false;
    $reemplazado = false;
    $ranking = [[]];

    for($i = 0; $i < count($arrayJS); $i++){
        if ($primerosCargados == false){

            $ranking [$countR] = [$arrayJS[$i][0], $arrayJS[$i][1] , 'false'];
            $countR++;

            if($countR == $cantRanking){
                $primerosCargados = true;
            }
        }
        else{
            for($v = 0; $v < $cantRanking; $v++){
                if($reemplazado == false){
                    if($arrayJS[$i][1] > $ranking[$v][1]){
                        $ranking [$v] = [$arrayJS[$i][0], $arrayJS[$i][1] , 'false'];
                        $reemplazado = true;
                    }
                }
            }
            $reemplazado = false;
        }
    }

    $ranking = json_encode($ranking);
    printf($ranking);

?>



                
