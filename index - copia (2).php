<?php
    require_once "clases/BaseDeDatos.php";

    $dataBase = new BaseDeDatos();

    function mostrarPuestos(){
    foreach ($dataBase->mostrar("puestos") as $buff){
        foreach($buff as $name => $value){
            echo $name . " = " . $value . "<br>";
        }
    }
}

    function editarPuesto($id) {
        foreach($dataBase->editar("puestos", $id) as $buff){
            foreach($buff as $name => $value){
                echo $name . " = " . $value . "<br>";
            }
        }
    }

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
    <body style="background: gray; margin: 0px 5% 0px 0%!important;
		padding: 0px 5% 0px 5%!important;
		width: 100%!important;">
        <h1>
            Bienvenido a BusquedasIT!
        </h1>
<!--<div class="toast" id="cajita1" role="alert" aria-live="assertive" aria-atomic="true">
  <div  class="toast-header">
    <img src="" class="rounded mr-2" alt="...">
    <strong class="mr-auto">Bootstrap</strong>
    <small>11 mins ago</small>
    <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
      <span aria-hidden="true">&times;</span>
    </button>
  </div>
  <div  class="toast-body">
    Hello, world! This is a toast message.
  </div>
</div>-->


<!-- <div aria-live="polite" aria-atomic="true" style="position: relative; min-height: 1200px;  border: 5px solid green;"> -->
  <!-- Position it -->
  <div class="" style="position: absolute; bottom: 0; right: 0; height: 100px; z-index: 1060; position: fixed;">

    <!-- Then put toasts within -->
    <div class="toast" id="cajita1" data-delay="10000" style="position: relative; bottom: 0; right: 0; height: 100%;">
      <div class="toast-header" style="width: 1000px!important;">
        <!--<img src="" class="rounded mr-2" alt="...">-->
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
<!-- </div> -->



        <!-- Button trigger modal -->
        <div class="navbar navbar-expand-lg navbar-light bg-light" style="display:flex; justify-content: space-between;">    
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Agregar puesto</button>
        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="">Gráficos</button>
        
        <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
    </div>



        <!-- Modal -->
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
            foreach ($dataBase->mostrar("puestos") as $buff){
                $arrayBuff []= $buff;
            }
                //print_r($arrayBuff);
                $arrayBuff = array_reverse($arrayBuff);
                //echo "<br>";
                //print_r($arrayBuff);
                foreach($arrayBuff as $name){
                    ?><div class="card" style="border-bottom: 2px solid black;width: 100%; margin: 0.3% 0.3%;"><div class="card-body" style="display: flex; flex-direction: row; align-items: baseline; flex-wrap: wrap; justify-content: space-between; flex-grow: 1;"><?php
                    foreach($name as $asda => $asdb){
                       // echo "asda = " . $asda . "..... asdb = " . $asdb . "<br>";
                    if($asda == "nombre" || $asda == "habilidadesTecnicas"){
                        if($count == 1 ){?><div style="margin: 0px 0px; display:inline-block;width: auto; margin-right: 4%;"><?php echo $asdb; ?></div> <div style="width: 10%; min-width:200px;"><button style="width: 50%;">Editar</button><button style="width: 50%;">Eliminar</button></div>
                <?php $count = 0; } else{ ?><div style="margin: 0px 0px; width: auto; min-width: 150px;display:inline-block; margin-right: 4%;"><?php echo $asdb; ?></div><?php $count++;}}}  ?></div></div><?php } ?></div>

        <script type="text/javascript">
    /*    $(document).ready(function () {
        $('#cajita1').toast('show');
        });*/
            $(document).ready(function () {
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


                                          //  console.log(countArray);

                                            //Buscar que se cargue o vea al principio de la lista el puesto ingresado
                                            var datas = JSON.parse(respuesta, function (key, value) {
                                               //    console.log(countArray + " = " + count);

                                                if(key == "nombre") {
                                                    arrayDeCadenas = arrayDeCadenas + '<div class="card" style="border: 2px solid black;width: 100%;"><div class="card-body" style=""><div style="margin: 0px 0px; display:inline-block;width: 300px;">' + value + "</div>";
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
                               //     alert("Se agrego Correctamente!");
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