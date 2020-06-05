<?php

    require_once "clases/BaseDeDatos.php";
    $dataBase = new BaseDeDatos();

?>
<!DOCTYPE html="html">
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css"
        integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <title>BusquedasIT</title>
    </head>
    <body style="background: gray;">

        <!-- TITULO -->
        <div class="navbar bg-light" style="margin: 1% 0.4% 0.25% 0.4%; border-radius: 0.25rem;">
            <h1 style="width: 100%;">Bienvenido a BusquedasIT!</h1>
        </div>

        <!-- NOTIFICACIÓN TOAST -->
        <div class="" style="position: absolute; bottom: 0; right: 0; height: 100px; z-index: 1060; position: fixed;">
            <div class="toast" id="cajita1" data-delay="10000" style="position: relative; bottom: 0; right: 0; height: 100%;">
                <div class="toast-header" style="width: 1000px!important;">
                    <strong class="mr-auto">BusquedasIT</strong>
                    <small class="text-muted">2 segundos atrás</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="toast-body" style="width: 100%;">Se agregó correctamente!</div>
            </div>
        </div>

        <!-- AGREGAR PUESTO PRESIONANDO EN EL BOTON "AGREGAR PUESTO" LLAMANDO A MODAL "exampleModal" PARA CARGAR DATOS-->
        <div class="navbar navbar-expand-lg navbar-light bg-light" style="display:flex; justify-content: space-between; margin: 0.25% 0.4% 1% 0.4%; border-radius: 0.25rem;">
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" onclick="" data-target="#exampleModal">Agregar puesto</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Gráficos</button>
            </div> 
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>
        </div>

        <!-- MODAL PARA CARGAR DATOS LLAMDO POR BOTON "AGREGAR PUESTO" -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Datos de puesto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form id="addPanel" name="form" method="post">
                            <input type="text" hidden id="id" name="nombre" value="">
                            <label for="nombre">nombre</label>
                            <input type="text" id="nombre" name="nombre"  value=""><br>
                            <label for="empresa">empresa</label>
                            <input type="text" id="empresa" name="empresa"  value=""><br>
                            <label for="nivel">nivel</label>
                            <input type="text" id="nivel" name="nivel"  value=""><br>
                            <label for="remuneracion">remuneracion</label>
                            <input type="text" id="remuneracion" name="remuneracion"  value=""><br>
                            <label for="habilidadesTecnicas">habilidadesTecnicas</label>
                            <input type="text" id="habilidadesTecnicas" name="habilidadesTecnicas"  value=""><br>
                            <label for="habilidadesBlandas">habilidadesBlandas</label>
                            <input type="text" id="habilidadesBlandas" name="habilidadesBlandas"  value=""><br>      
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnClose">Close</button>
                                <button type="submit" class="btn btn-primary" id="btnOk">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Editar Puesto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form id="editPanel" name="form" method="post">
                            <input type="text" hidden id="edit_id" name="id" value="">
                            <label for="nombre">nombre</label>
                            <input type="text" id="edit_nombre" name="nombre" value=""><br>
                            <label for="empresa">empresa</label>
                            <input type="text" id="edit_empresa" name="empresa" value=""><br>
                            <label for="nivel">nivel</label>
                            <input type="text" id="edit_nivel" name="nivel" value=""><br>
                            <label for="remuneracion">remuneracion</label>
                            <input type="text" id="edit_remuneracion" name="remuneracion" value=""><br>
                            <label for="habilidadesTecnicas">habilidadesTecnicas</label>
                            <input type="text" id="edit_habilidadesTecnicas" name="habilidadesTecnicas" value=""><br>
                            <label for="habilidadesBlandas">habilidadesBlandas</label>
                            <input type="text" id="edit_habilidadesBlandas" name="habilidadesBlandas" value=""><br>      
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="edit_btnClose">Close</button>
                                <button type="submit" class="btn btn-primary" id="edit_btnOk">Save changes</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- IMPRIME TODOS LOS PUESTOS CARGADOS A LA BASE DE DATOS -->
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

            // SOLICITA LA LISTA DE PUESTOS CARGADOS Y DEVUELVE UN ARRAY ORDENADO PARA RECORRER "$buff"
            foreach ($dataBase->mostrar("puestos") as $buff){
                $arrayBuff []= $buff;
            }

            $arrayBuff = array_reverse($arrayBuff);

            foreach($arrayBuff as $buff){?>

                <div class="card" style="width: auto; margin: 0.25% 0.4%;">
                    <div class="card-body" style="display: flex; flex-direction: row; align-items: baseline; flex-wrap: wrap; justify-content: space-between; flex-grow: 1;"><?php

                    foreach($buff as $name => $value){

                        $arrayNames [] = $name;
                        $arrayValues [] = $value;

                        if($name == "id"){
                            $arrayID = $value;
                        }

                        $arrayIndex++;
                    
                        if ($arrayIndex == 9) {
                        
                            $arrayData = $arrayValues;
                            $arrayValues = [];
                            $arrayData = [];
                            $arrayIndex = 0;

                        }

                        
                        if($name == "nombre" || $name == "habilidadesTecnicas"){
                            if($count == 1 ){?>

                                <div style="margin: 0px 0px; display:inline-block;width: auto; margin-right: 4%;" id="habilidadesTecnicas_<?php echo $arrayID; ?>"><?php echo $value; ?></div><div style="width: 10%; min-width:200px;"><button type="buttom" style="width: 50%;" data-toggle="modal" onclick="modificarPanel(<?php echo $arrayID;?>)"data-target="#editModal">Editar</button><button style="width: 50%;">Eliminar</button></div><?php
                    
                                $count = 0; $arrayID = 0;
                            } 
                            else{ ?>

                                <div style="margin: 0px 0px; width: auto; min-width: 150px;display:inline-block; margin-right: 4%;" id="nombre_<?php echo $arrayID; ?>"><?php
                                    echo $value; ?>
                                </div><?php
                            
                                $count++;
                            }
                        }
                    }?>

                    </div>
                </div><?php

            }?>

        </div>

        

        <script type="text/javascript">

            function modificarPanel(idPuesto){

                console.log("Se presiono el boton de editar!, tiene id = " + idPuesto);

                $.ajax({
                    type: "POST",
                    url: 'buscarPorId.php',
                    data: {
                        tabla: "puestos", id: idPuesto
                    },
                    success: function (respuesta){
                      //  console.log(respuesta);

                        var arrayValues = [];
                        var count = 0;
                        
                        var datas = JSON.parse(respuesta, function (key, values) {

                            if( count == 0){
                                arrayValues.push(values);
                            }

                            if( key == "updated_at")
                            {
                                count++;
                            }
                            if (key == "id"){
                                count = 0;
                            }   
                            });

                            document.querySelector("#edit_id").value = arrayValues[0];
                            document.querySelector("#edit_nombre").value = arrayValues[1];
                            document.querySelector("#edit_empresa").value = arrayValues[2];
                            document.querySelector("#edit_nivel").value = arrayValues[3];
                            document.querySelector("#edit_remuneracion").value = arrayValues[4];
                            document.querySelector("#edit_habilidadesTecnicas").value = arrayValues[5];
                            document.querySelector("#edit_habilidadesBlandas").value = arrayValues[6];

                            // console.log(arrayValues);
                    }
                });
            }

            $(document).ready(function (){

                $('#editPanel').submit( function (a){

                    console.log("Se hizo submit con el boton del form y estamos en editPanel para actualizar el puesto");
                    console.log(this.id.value);
                    // var nombre = "#nombre_";
                    var puesto_id = this.id.value;
                    var puesto_nombre = this.nombre.value;
                    var puesto_habilidadesTecnicas = this.habilidadesTecnicas.value;
                    a.preventDefault();
                    $.ajax({
                        type: "POST",
                        url: 'editarPuesto.php',
                        data: $(this).serialize(),
                        success: function (response){
                            if(response){
                              //  console.log(objeto);

                                document.querySelector("#nombre_" + puesto_id).innerHTML = puesto_nombre;
                                document.querySelector("#habilidadesTecnicas_" + puesto_id).innerHTML = puesto_habilidadesTecnicas;
                                console.log("ACTUALIZADO!");
                                
                            }
                            else{
                                console.log("ERROR");
                            }
                        }
                    });
                });

                

                $('#addPanel').submit(function (e){

                    console.log("Se hizo submit con el boton y estamos en addtPanel");

                    e.preventDefault();
                    $.ajax({

                        type: "POST",
                        url: 'agregarPuesto.php',
                        data: $(this).serialize(),

                        success: function (response){

                            var jsonData = JSON.parse(response);
                            if (jsonData.success == "1"){

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

                                    success: function (respuesta){

                                        if(respuesta){

                                            console.log("exito addPanel: ingresamos a la funcion de refrescar datos");

                                        var div = document.querySelector('#Refresh');
                                        var countArray = 0;
                                        var arrayDeCadenas = [];
                                        var stringJSON = JSON.parse(respuesta);
                                        div.innerHTML = "";

                                        for(x in stringJSON){
                                            countArray++;
                                        }

                                        var arrayValue = [];
                                        var indexValue = 0;
                                        var arrayValue1 = [];
                                        var indexKey = 0;
                                        var arrayKey1 = [];
                                        var countIndex = 0;
                                        var count = 0;
                                        var arrayData1 = [];
                                        var datas = JSON.parse(respuesta, function (key, value) {

                                            if(count != 1){
                                                arrayValue1.push(value);    
                                            }
                                            if(key != "id")
                                            {
                                                count = 0;
                                            }
                                            else{
                                                arrayValue.push(value);
                                            }
                                            if(key == "nombre")
                                            {


                                                arrayDeCadenas = arrayDeCadenas + '<div class="card" style="width: auto; margin: 0.25% 0.4%;"><div class="card-body" style="display: flex; flex-direction: row; align-items: baseline; flex-wrap: wrap; justify-content: space-between; flex-grow: 1;"><div style="margin: 0px 0px; width: auto; min-width: 150px;display:inline-block; margin-right: 4%;" id="nombre_' + arrayValue[indexValue] + '">' + value + "</div>";
                                            }
                                            if(key == "habilidadesBlandas"){

                                                arrayDeCadenas = arrayDeCadenas + '<div style="margin: 0px 0px; display:inline-block;width: auto; margin-right: 4%;" id="habilidadesTecnicas_' + arrayValue[indexValue] + '">' + arrayValue1[5] + '</div><div style="width: 10%; min-width:200px;"><button type="buttom" style="width: 50%;" data-toggle="modal" onclick="modificarPanel(' + arrayValue[indexValue] + ')"data-target="#editModal">Editar</button><button style="width: 50%;">Eliminar</button></div>';
                                                //arrayDeCadenas = arrayDeCadenas + '<div style="margin: 0px 0px; display:inline-block;width: auto; margin-right: 4%;">' + arrayValue1[5] + '</div><div style="width: 10%; min-width:200px;"><button type="submit" data-toggle="modal" data-target="#btnId_' + arrayValue[indexValue] + '" state="HOLA JQUERY!" id="">Editar</button><button style="width: 50%;">Eliminar</button></div>';
                                               // arrayDeCadenas = arrayDeCadenas + '<div class="modal fade" id="btnId_' + arrayValue[indexValue] + '" tabindex="-1" role="dialog" aria-labelledby="editarLabel_'+ arrayValue[indexValue]  + '" aria-hidden="true"> <div class="modal-dialog"> <div class="modal-content"> <div class="modal-header"> <h5 class="modal-title" id="editarLabel_'+ arrayValue[indexValue]  + '">Datos de puesto</h5> <button type="button" class="close" data-dismiss="modal" aria-label="Close"> <span aria-hidden="true">hora</span> </button> </div> <div class="modal-body"> <form class="editPanel" name="form" method="post"> <input type="text" hidden class="id" name="id" value="algo"> <label for="nombre">Nombre</label> <input type="text" class="nombre" name="nombre" value="' + arrayValue1[1] + '"> <br> <label for="empresa">empresa</label> <input type="text" class="empresa" name="empresa" value="' + arrayValue1[2] + '"> <br> <label for="nivel">nivel</label> <input type="text" class="nivel" name="nivel" value="' + arrayValue1[3] + '"> <br> <label for="remuneracion">remuneracion</label> <input type="text" class="remuneracion" name="remuneracion" value="' + arrayValue1[4] + '"> <br> <label for="habilidadesTecnicas">habilidadesTecnicas</label> <input type="text" class="habilidadesTecnicas" name="habilidadesTecnicas" value="' + arrayValue1[5] + '"> <br> <label for="habilidadesBlandas">habilidadesBlandas</label> <input type="text" class="habilidadesBlandas" name="habilidadesBlandas" value="' + arrayValue1[6] + '"> <br> <div class="modal-footer"> <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnClose">Close</button> <button type="submit" class="btn btn-primary btnEdit_ID">Save changes</button> </div></form> </div></div> </div> </div>';
                                                indexValue++;

                                            }
                                            if(key == "updated_at"){

                                                arrayDeCadenas = arrayDeCadenas + '</div></div>';
                                                count = 1;  
                                                arrayData1[arrayValue[countIndex]] = arrayValue1;
                                                arrayValue1 = [];
                                                countIndex++;

                                            }
                                            if(key == "updated_at" && countIndex == countArray){
                                                div.innerHTML = div.innerHTML + arrayDeCadenas;
                                            }
                                        });

                                        }
                                        else{
                                            console.log("error addPanel: sin valores");
                                        }
                                    }

                                });

                                $('#cajita1').toast('show');

                            }
                        }
                    });
                });                
            });

        </script>
        <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

    </body>
</html>