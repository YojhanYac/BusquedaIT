<?php
    require_once "clases/BaseDeDatos.php";
    $dataBase = new BaseDeDatos();
?>
<!DOCTYPE html="html">
<html lang="en" style="">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script
            src="https://code.jquery.com/jquery-3.5.1.min.js"
            integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
            crossorigin="anonymous"></script>
        <link
            rel="stylesheet"
            href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
            integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk"
            crossorigin="anonymous">
        <title>Document</title>
    </head>
    <body style="background: gray;">
    <div class="navbar bg-light" style="margin: 1% 0.4% 0.25% 0.4%; border-radius: 0.25rem;">
            <h1 style="width: 100%;">Bienvenido a BusquedasIT!</h1>
</div>
  <div class="" style="position: absolute; bottom: 0; right: 0; height: 100px; z-index: 1060; position: fixed;">

    <div class="toast" id="cajita1" data-delay="10000" style="position: relative; bottom: 0; right: 0; height: 100%;">
      <div class="toast-header" style="width: 1000px!important;">
        <strong class="mr-auto">BusquedasIT</strong>
        <small class="text-muted">2 seconds ago</small>
        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="toast-body" style="width: 100%;">
        Se agregó correctamente!
      </div>
    </div>
  </div>
        <div class="navbar navbar-expand-lg navbar-light bg-light" style="display:flex; justify-content: space-between; margin: 0.25% 0.4% 1% 0.4%; border-radius: 0.25rem;">
        <div>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar puesto</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Gráficos</button></div> 
        
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>
        <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Datos de puesto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form id="addPanel" name="form" method="post">
                            <label for="nombre">nombre</label>
                            <input type="text" id="nombre" name="nombre">
                            <br>
                            <label for="empresa">empresa</label>
                            <input type="text" id="empresa" name="empresa">
                            <br>
                            <label for="nivel">nivel</label>
                            <input type="text" id="nivel" name="nivel">
                            <br>
                            <label for="remuneracion">remuneracion</label>
                            <input type="text" id="remuneracion" name="remuneracion">
                            <br>
                            <label for="habilidadesTecnicas">habilidadesTecnicas</label>
                            <input type="text" id="habilidadesTecnicas" name="habilidadesTecnicas">
                            <br>
                            <label for="habilidadesBlandas">habilidadesBlandas</label>
                            <input type="text" id="habilidadesBlandas" name="habilidadesBlandas">
                            <br>
                            
                        </div>
                        <div class="modal-footer">
                            <button
                                type="button"
                                class="btn btn-secondary"
                                data-dismiss="modal"
                                id="btnClose">Close</button>
                            <button type="submit" class="btn btn-primary" id="btnOk">Save changes</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div id="Refresh"><?php 
            $count = 0;
            $arrayBuff = [];
            $arrayNames = [];
            $arrayValues = [];
            $indexCount = 0;
            $indexEdit = 0;
            $arrayIndex = 0;
            $arrayData = [];
            $arrayID = 0;
            foreach ($dataBase->mostrar("puestos") as $buff){
                $arrayBuff []= $buff;
            }
                $arrayBuff = array_reverse($arrayBuff);
                foreach($arrayBuff as $buff){
                    ?><div class="card" style="width: auto; margin: 0.25% 0.4%;"><div class="card-body" style="display: flex; flex-direction: row; align-items: baseline; flex-wrap: wrap; justify-content: space-between; flex-grow: 1;"><?php
                    foreach($buff as $name => $value){

                        $arrayNames [] = $name;
                        $arrayValues [] = $value;  
                        if($name == "id"){
                            $arrayID = $value;
                        }
                        ?>
                        <?php

                            $arrayIndex++;

                        if ($arrayIndex == 9) { $arrayData = $arrayValues;
                        ?>

                            <div
                        class="modal fade"
                        id="<?php echo "btnId_" . $arrayData[0]; ?>"
                        tabindex="-1"
                        role="dialog"
                        aria-labelledby="<?php echo "btnId_" . $arrayData[0] ."Label"; ?>"
                        aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="<?php echo "btnId_" . $arrayData[0] ."Label"; ?>">Datos de puesto</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <form class="editPanel" name="form" method="post">
                                        <input type="text" hidden class="id" name="id" value="<?php echo $arrayData[0];?>">
                                        <label for="nombre">Nombre</label>
                                        <input type="text" class="nombre" name="nombre" value="<?php echo $arrayData[1];?>">
                                        <br>
                                        <label for="empresa">empresa</label>
                                        <input type="text" class="empresa" name="empresa" value="<?php echo $arrayData[2];?>">
                                        <br>
                                        <label for="nivel">nivel</label>
                                        <input type="text" class="nivel" name="nivel" value="<?php echo $arrayData[3];?>">
                                        <br>
                                        <label for="remuneracion">remuneracion</label>
                                        <input type="text" class="remuneracion" name="remuneracion" value="<?php echo $arrayData[4];?>">
                                        <br>
                                        <label for="habilidadesTecnicas">habilidadesTecnicas</label>
                                        <input type="text" class="habilidadesTecnicas" name="habilidadesTecnicas" value="<?php echo $arrayData[5];?>">
                                        <br>
                                        <label for="habilidadesBlandas">habilidadesBlandas</label>
                                        <input type="text" class="habilidadesBlandas" name="habilidadesBlandas" value="<?php echo $arrayData[6];?>">
                                        <br>
                                        
                                    </div>
                                    <div class="modal-footer">
                                        <button
                                            type="button"
                                            class="btn btn-secondary"
                                            data-dismiss="modal"
                                            id="btnClose">Close</button>
                                            <button type="submit" class="btn btn-primary btnEdit_ID">Save changes</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                            <?php
                            $arrayValues = [];
                            $arrayData = [];
                            $arrayIndex = 0;
                        }

                    if($name == "nombre" || $name == "habilidadesTecnicas"){
                        if($count == 1 ){?><div style="margin: 0px 0px; display:inline-block;width: auto; margin-right: 4%;"><?php echo $value; ?></div> <div style="width: 10%; min-width:200px;"><button type="buttom" style="width: 50%;" data-toggle="modal" data-target="<?php echo "#btnId_" . $arrayID; ?>">Editar</button><button style="width: 50%;">Eliminar</button></div>
                <?php $count = 0; $arrayID = 0;}        
                else{ ?><div style="margin: 0px 0px; width: auto; min-width: 150px;display:inline-block; margin-right: 4%;"><?php echo $value; ?></div><?php $count++;}}}  ?></div></div><?php } ?></div>

        <script type="text/javascript">
            $(document).ready(function () {
                $('.editPanel').submit( function (elemento){
                    elemento.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: 'editarPuesto.php',
                        data: $(this).serialize(),
                        success: function (response) {
                            console.log("REALIZADOO1");
                           var jsonData = JSON.parse(response);
                            if (jsonData.success == "1") {
                                console.log("REALIZADOO2");
                                $.ajax({
                                        type: "POST",
                                        url: 'actualizarLista.php',
                                        data: {
                                            tabla: "puestos"
                                        },
                                        success: function (respuesta) {
                                            var div = document.querySelector('#Refresh');
                                            var countArray = 0;
                                            var count = 0;
                                            div.innerHTML = "";
                                            var arrayDeCadenas = [];
                                            var stringJSON = JSON.parse(respuesta);
                                            console.log("REALIZADOO3");
                                            for(x in stringJSON){
                                                    countArray++;
                                            }
                                            var datas = JSON.parse(respuesta, function (key, value) {




                                                








                                                if(key == "nombre") {
                                                    arrayDeCadenas = arrayDeCadenas + '<div class="card" style="width: auto; margin: 0.25% 0.4%;"><div class="card-body" style="display: flex; flex-direction: row; align-items: baseline; flex-wrap: wrap; justify-content: space-between; flex-grow: 1;"><div style="margin: 0px 0px; display:inline-block;width: 300px;">' + value + "</div>";
                                                            count++;
                                                }
                                                if(key == "habilidadesTecnicas") {
                                                    arrayDeCadenas = arrayDeCadenas + '<div style="margin: 0px 0px; display:inline-block; width: auto;">' + value + "</div>";
                                                }
                                                if(key == 'habilidadesBlandas'){
                                                    arrayDeCadenas = arrayDeCadenas + '</div></div>';
                                                }
                                                if(key == 'habilidadesBlandas' && countArray == count){
                                                    div.innerHTML = div.innerHTML + arrayDeCadenas;
                                                }
                                            });
                                        }
                                    });
                                    $('#cajita1').toast('show');
                            } 
                        }
                    });
                });

                $('#addPanel').submit(function (e) {
                    e.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: 'agregarPuesto.php',
                        data: $(this).serialize(),
                        success: function (response) {
                            var jsonData = JSON.parse(response);
                            if (jsonData.success == "1") {

                                document.querySelector("#nombre").value = "";
                                document.querySelector("#empresa").value = "";
                                document.querySelector("#nivel").value = "";
                                document.querySelector("#remuneracion").value = "";
                                document.querySelector("#habilidadesTecnicas").value = "";
                                document.querySelector("#habilidadesBlandas").value = "";

                                    $.ajax({
                                        type: "POST",
                                        url: 'actualizarLista.php',
                                        data: {
                                            tabla: "puestos"
                                        },
                                        success: function (respuesta) {
                                            var div = document.querySelector('#Refresh');
                                            var countArray = 0;
                                            var count = 0;
                                            div.innerHTML = "";
                                            var arrayDeCadenas = [];

                                            var stringJSON = JSON.parse(respuesta);

                                            for(x in stringJSON){
                                                    countArray++;
                                            }

                                            //alert(countArray);

                                            var arrayValue = [];
                                            var indexValue = 0;
                                            var arrayKey = [];
                                            var indexKey = 0;
                                            var countIndex = 0;

                                            var datas = JSON.parse(respuesta, function (key, value) {
                                                // arrayKey.push(key);

                                              //  console.log(key + " = " + value);
                                                if(key == "id")
                                                {
                                                    arrayValue.push(value);
                                                }

                                                if(key == "nombre")
                                                {
                                                  //  console.log(value);
                                                    arrayDeCadenas = arrayDeCadenas + '<div class="card" style="width: auto; margin: 0.25% 0.4%;"><div class="card-body" style="display: flex; flex-direction: row; align-items: baseline; flex-wrap: wrap; justify-content: space-between; flex-grow: 1;"><div style="margin: 0px 0px; width: auto; min-width: 150px;display:inline-block; margin-right: 4%;">' + value + "</div>";
                                                }

                                                if(key == "habilidadesTecnicas"){
                                                    arrayDeCadenas = arrayDeCadenas + '<div style="margin: 0px 0px; display:inline-block;width: auto; margin-right: 4%;">' + value + '</div><div style="width: 10%; min-width:200px;"><button type="buttom" style="width: 50%;" data-toggle="modal" data-target="#btnId_' + arrayValue[indexValue] + '">Editar</button><button style="width: 50%;">Eliminar</button></div>';
                                                    console.log(arrayValue[indexValue]);

                                                    indexValue++;
                                                }

                                                if(key == "updated_at") {
                                                    arrayDeCadenas = arrayDeCadenas + '</div></div>';
                                                    countIndex++;
                                                }
                                                if(key == "updated_at" && countIndex == countArray){
                                                   // console.log(countIndex + " = " + countArray);

                                                    div.innerHTML = div.innerHTML + arrayDeCadenas;
                                                }
  
                                            });

                                        }
                                    });

                                    $('#cajita1').toast('show');

                            } else {
                                alert("No se pudo agregar!");
                            }
                        }
                    });
                });
            });
        </script>
        <script
            src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
            integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
            crossorigin="anonymous"></script>
        <script
            src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"
            integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI"
            crossorigin="anonymous"></script>

    </body>
</html>