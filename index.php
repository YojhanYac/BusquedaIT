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
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/png" href="icon/icon.svg">
        <title>BusquedaIT</title>
    </head>
    <body>

        <!-- TITULO -->
        <div class="navbar bg-light title-page">
            <h1>Bienvenido a BusquedaIT!</h1>
        </div>

        <!-- NOTIFICACIÓN TOAST -->
        <div class="toast-container">
            <div class="toast toast-position" id="toast" data-delay="1300">
                <div class="toast-header">
                    <strong class="mr-auto">BusquedaIT</strong>
                    <small class="text-muted">2 segundos atrás</small>
                    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                </div>
                <div class="toast-body" id="textToast">Se agregó correctamente!</div>
            </div>
        </div>


        <!-- AGREGAR PUESTO PRESIONANDO EN EL BOTON "AGREGAR PUESTO" LLAMANDO A MODAL "exampleModal" PARA CARGAR DATOS-->
        <div class="navbar navbar-expand-lg navbar-light bg-light main-container">
            <div>
                <button type="button" class="btn btn-primary" data-toggle="modal" onclick="" data-target="#exampleModal">Agregar puesto</button>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#graficosModal">Gráficos</button>
            </div> 
            <form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Search">
                <!-- <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button> -->
            </form>
        </div>

        <!-- MODAL PARA CARGAR DATOS LLAMDO POR BOTON "AGREGAR PUESTO" -->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Nuevo puesto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form id="addPanel" name="form" method="post">
                            <input type="text" hidden id="id" name="nombre" value="">
                            <input type="text" id="nombre" name="nombre" value="" placeholder="Puesto" required><br>
                            <input type="text" id="empresa" name="empresa" value="" placeholder="Empresa"><br>
                            <input type="text" id="nivel" name="nivel" value="" placeholder="Nivel"><br>
                            <input type="text" id="remuneracion" name="remuneracion" value="" placeholder="Remuneración"><br>
                            <input type="text" id="habilidadesTecnicas" name="habilidadesTecnicas" value="" placeholder="Habilidades Técnicas"><br>
                            <input type="text" id="habilidadesBlandas" name="habilidadesBlandas" value="" placeholder="Habilidades Blandas"><br><br>    
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnClose">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="btnOk">Guardar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="graficosModal" tabindex="-1" role="dialog" aria-labelledby="graficosModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="graficosModalLabel">Gráficos</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">

                        <br><p>Próximadamente gráficos</p><br>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal" id="btnClose">Cerrar</button>
                            <button type="button" class="btn btn-primary" data-dismiss="modal" id="btnOk">Atrás</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODALQUE SERÁ LLAMADO AL HACER CLICL EN "Editar", SE VISUALIZARAN LOS DATOS DEL PUESTO SELECCIONADO -->
        <div class="modal fade" id="editModal" tabindex="-1" role="dialog" aria-labelledby="editModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editModalLabel">Datos del puesto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form id="editPanel" name="form" method="post">
                            <input type="text" hidden id="edit_id" name="id" value="">
                            <input type="text" id="edit_nombre" name="nombre" value="" placeholder="Nombre" required><br>
                            <input type="text" id="edit_empresa" name="empresa" value="" placeholder="Empresa"><br>
                            <input type="text" id="edit_nivel" name="nivel" value="" placeholder="Nivel"><br>
                            <input type="text" id="edit_remuneracion" name="remuneracion" value="" placeholder="Remuneración"><br>
                            <input type="text" id="edit_habilidadesTecnicas" name="habilidadesTecnicas" value="" placeholder="Habilidades técnicas"><br>
                            <input type="text" id="edit_habilidadesBlandas" name="habilidadesBlandas" value="" placeholder="Habilidades Blandas"><br>      
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal" id="edit_btnClose">Cerrar</button>
                                <button type="submit" class="btn btn-primary" id="edit_btnOk">Guardar cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- MODAL QUE SERÁ LLAMADO AL HACER CLICK EN "Eliminar", SE VISUALIZARAN LOS DATOS DEL PUESTO SELECCIONADO A ELIMINAR -->
        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="deleteModalLabel">Eliminar puesto</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <form id="deletePanel" name="form" method="post">
                            <input type="text" hidden id="delete_id" name="id" value="">
                            <div id="dato_nombre"></div>
                            <div id="dato_habilidad"></div><br>
                            <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Atrás</button>
                                <button type="submit" class="btn btn-primary" >Confirmar</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- SE IMPRIMEN TODOS LOS PUESTOS CARGADOS EN LA BASE DE DATOS -->
        <div id="Refresh"><?php

            $count = 0;
            $arrayBuff = [];
            $arrayID = 0;

            foreach ($dataBase->mostrar("puestos") as $buff){
                $arrayBuff []= $buff;
            }

            $arrayBuff = array_reverse($arrayBuff);

            foreach($arrayBuff as $buff){?>

                <div class="card card-item-container">
                    <div class="card-body card-item"><?php

                    foreach($buff as $name => $value){

                        if($name == "id"){
                            $arrayID = $value;
                        }                        
                        if($name == "nombre" || $name == "habilidadesTecnicas"){
                            if($count == 1 ){?>

                                <div class="card-description" id="habilidadesTecnicas_<?php echo $arrayID; ?>"><?php echo $value; ?></div><div class="card-button-container"><button type="buttom" class="green card-button" data-toggle="modal" onclick="modificarPanel(<?php echo $arrayID;?>)"data-target="#editModal">Editar</button><button type="buttom" class="red card-button" data-toggle="modal" onclick="preDeletePuesto(<?php echo $arrayID;?>)" data-target="#deleteModal">Eliminar</button></div><?php
                    
                                $count = 0; $arrayID = 0;
                            } 
                            else{ ?>

                                <div class="card-name" id="nombre_<?php echo $arrayID; ?>"><?php
                                    echo $value;?>
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

            // FUNCIÓN QUE ELIMINA EL PUESTO SELECIONADO, Y LUEGO ACTUALIZA LA VISTA DE PUESTOS
            $('#deletePanel').submit( function (a){

                a.preventDefault();
                var puesto_id = this.id.value;

                $.ajax({
                    type: "POST",
                    url: 'eliminarPuesto.php',
                    data: {
                        tabla: "puestos", id: puesto_id
                    },
                    success: function (respuesta){

                        var jsonData = JSON.parse(respuesta);

                        if (jsonData.success == "1"){

                            $.ajax({
                                type: "POST",
                                url: 'actualizarLista.php',
                                data: {
                                    tabla: "puestos"
                                },
                                success: function (respuesta){

                                    if(respuesta != false){

                                        var arrayText = []; arrayId = []; arrayValue = []; countArray = 0; indexValue = 0; countIndex = 0; count = 0;

                                        var stringJSON = JSON.parse(respuesta);
                                        var div = document.querySelector('#Refresh');

                                        div.innerHTML = "";

                                        for(x in stringJSON){
                                            countArray++;
                                        }

                                        var datas = JSON.parse(respuesta, function (key, value) {

                                            if(count != 1){
                                                arrayValue.push(value);    
                                            }
                                            if(key != "id")
                                            {
                                                count = 0;
                                            }
                                            else{
                                                arrayId.push(value);
                                            }
                                            if(key == "nombre")
                                            {
                                                arrayText = arrayText + '<div class="card card-item-container"><div class="card-body card-item"><div class="card-name" id="nombre_' + arrayId[indexValue] + '">' + value + "</div>";
                                            }
                                            if(key == "habilidadesBlandas"){
                                                arrayText = arrayText + '<div class="card-description" id="habilidadesTecnicas_' + arrayId[indexValue] + '">' + arrayValue[5] + '</div><div class="card-button-container"><button type="buttom" class="card-button green-button" data-toggle="modal" onclick="modificarPanel(' + arrayId[indexValue] + ')"data-target="#editModal">Editar</button><button type="bottom" class="card-button red-button" data-toggle="modal" onclick="preDeletePuesto(' + arrayId[indexValue] + ')" data-target="#deleteModal">Eliminar</button></div>';
                                                indexValue++;
                                            }
                                            if(key == "updated_at"){

                                                arrayText = arrayText + '</div></div>';
                                                count = 1;  
                                                arrayValue = [];
                                                countIndex++;

                                            }
                                            if(key == "updated_at" && countIndex == countArray){
                                                div.innerHTML = div.innerHTML + arrayText;
                                            }
                                        });
                                    }
                                    else{
                                        document.querySelector("#textToast").innerHTML = "Error al actualizar la lista";
                                        $('#toast').toast('show');
                                    }

                                }

                            });
                            document.querySelector("#textToast").innerHTML = "Se eliminó correctamente!";
                            $('#deleteModal').modal('toggle');
                            $('#toast').toast('show');
                        }
                        else{
                            document.querySelector("#textToast").innerHTML = "Hubo un error, intente nuevamente";
                            $('#toast').toast('show');
                        }
                    }
                });

            });

                // FUNCIÓN QUE MUESTRA LOS DATOS DEL PUESTO ANTES DE CONFIRMAR SU ELIMINACIÓN
            function preDeletePuesto(idPuesto){

                $.ajax({
                    type: "POST",
                    url: 'buscarPorId.php',
                    data: {
                        tabla: "puestos", id: idPuesto
                    },
                    success: function (respuesta){

                        if(respuesta != false){

                            var arrayIds = [];
                            var count = 0;

                            var datas = JSON.parse(respuesta, function (key, values) {

                                if( count == 0){
                                    arrayIds.push(values);
                                }

                                if( key == "updated_at")
                                {
                                    count++;
                                }
                                if (key == "id"){
                                    count = 0;
                                }

                            });

                            document.querySelector("#delete_id").value = arrayIds[0];
                            document.querySelector("#dato_nombre").innerHTML = "Nombre : " + arrayIds[1];
                            document.querySelector("#dato_habilidad").innerHTML = "Habilidades Técnicas : " + arrayIds[5];
                        }
                        else{
                            document.querySelector("#textToast").innerHTML = "Hubo un error intente nuevamente";
                            $('#editModal').modal('toggle');
                            $('#toast').toast('show');
                        }
                    }
                });

            }

            // FUNCIÓN QUE MUESTRA LOS DATOS DEL PUESTO QUE SERÁ MODIFICADO
            function modificarPanel(idPuesto){

                $.ajax({
                    type: "POST",
                    url: 'buscarPorId.php',
                    data: {
                        tabla: "puestos", id: idPuesto
                    },
                    success: function (respuesta){

                        if(respuesta != false){

                            var arrayIds = [];
                            var count = 0;

                            var datas = JSON.parse(respuesta, function (key, values) {

                                if( count == 0){
                                    arrayIds.push(values);
                                }

                                if( key == "updated_at")
                                {
                                    count++;
                                }
                                if (key == "id"){
                                    count = 0;
                                }

                            });

                            document.querySelector("#edit_id").value = arrayIds[0];
                            document.querySelector("#edit_nombre").value = arrayIds[1];
                            document.querySelector("#edit_empresa").value = arrayIds[2];
                            document.querySelector("#edit_nivel").value = arrayIds[3];
                            document.querySelector("#edit_remuneracion").value = arrayIds[4];
                            document.querySelector("#edit_habilidadesTecnicas").value = arrayIds[5];
                            document.querySelector("#edit_habilidadesBlandas").value = arrayIds[6];
                        }
                        else{
                            document.querySelector("#textToast").innerHTML = "Hubo un error intente nuevamente";
                            $('#editModal').modal('toggle');
                            $('#toast').toast('show');
                        }
                    }
                });
            }


            $(document).ready(function (){

                // FUNCIÓN QUE MODIFICA LOS DATOS DEL PUESTO SELECCIONADO
                $('#editPanel').submit( function (a){

                    var puesto_id = this.id.value;
                    var puesto_nombre = this.nombre.value;
                    var puesto_habilidadesTecnicas = this.habilidadesTecnicas.value;

                    a.preventDefault();

                    $.ajax({
                        type: "POST",
                        url: 'editarPuesto.php',
                        data: $(this).serialize(),
                        success: function (response){

                            var jsonData = JSON.parse(response);

                            if (jsonData.success == "1"){

                                document.querySelector("#textToast").innerHTML = "Se modificó correctamente!";
                                document.querySelector("#nombre_" + puesto_id).innerHTML = puesto_nombre;
                                document.querySelector("#habilidadesTecnicas_" + puesto_id).innerHTML = puesto_habilidadesTecnicas;

                                $('#editModal').modal('toggle');
                                $('#toast').toast('show');

                            }
                            else{

                                document.querySelector("#textToast").innerHTML = "Hubo un error intente nuevamente";
                                $('#toast').toast('show');

                            }
                        }
                    });
                });


                // FUNCIÓN QUE AGREGA PUESTOS NUEVOS, LUEGO ACTUALIZA LA VISTA DE PUESTOS
                $('#addPanel').submit(function (e){

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

                                        if(respuesta != false){

                                            var arrayText = []; arrayId = []; arrayValue = []; countArray = 0; indexValue = 0; countIndex = 0; count = 0;

                                            var div = document.querySelector('#Refresh');
                                            var stringJSON = JSON.parse(respuesta);

                                            div.innerHTML = "";

                                            for(x in stringJSON){
                                                countArray++;
                                            }

                                            var datas = JSON.parse(respuesta, function (key, value) {

                                                if(count != 1){
                                                    arrayValue.push(value);    
                                                }
                                                if(key != "id")
                                                {
                                                    count = 0;
                                                }
                                                else{
                                                    arrayId.push(value);
                                                }
                                                if(key == "nombre")
                                                {
                                                    arrayText = arrayText + '<div class="card card-item-container"><div class="card-body card-item"><div class="card-name" id="nombre_' + arrayId[indexValue] + '">' + value + "</div>";
                                                }
                                                if(key == "habilidadesBlandas"){
                                                    arrayText = arrayText + '<div class="card-description" id="habilidadesTecnicas_' + arrayId[indexValue] + '">' + arrayValue[5] + '</div><div class="card-button-container"><button type="buttom" class="card-button green-button" data-toggle="modal" onclick="modificarPanel(' + arrayId[indexValue] + ')"data-target="#editModal">Editar</button><button type="bottom" class="card-button red-button" data-toggle="modal" onclick="preDeletePuesto(' + arrayId[indexValue] + ')" data-target="#deleteModal">Eliminar</button></div>';
                                                    indexValue++;
                                                }
                                                if(key == "updated_at"){

                                                    arrayText = arrayText + '</div></div>';
                                                    count = 1;  
                                                    arrayValue = [];
                                                    countIndex++;

                                                }
                                                if(key == "updated_at" && countIndex == countArray){
                                                    div.innerHTML = div.innerHTML + arrayText;
                                                }

                                            });
                                        }
                                        else{
                                            document.querySelector("#textToast").innerHTML = "Error al actualizar lista";
                                            $('#toast').toast('show');
                                        }
                                    }

                                });
                                document.querySelector("#textToast").innerHTML = "Se agregó correctamente!";
                                $('#toast').toast('show');
                            }
                            else {
                                document.querySelector("#textToast").innerHTML = "Hubo un error, intente nuevamente";
                                $('#toast').toast('show');
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