<?php 

require_once "BaseDeDatos.php";

class Puestos {

    private $nombre;
    private $empresa;
    private $nivel;
    private $remuneracion;
    private $habilidadesTecnicas;
    private $habilidadesBlandas;
    private $datos = [];
    private $nombres = [];

    public function insertar($buff){

        foreach($buff as $name => $value){
            $this->datos[] = $value;
            $this->nombres[] = $name;
        }

        $BaseDeDatos = new BaseDeDatos();
        $BaseDeDatos->insertar("puestos", $this->datos);

    }



    public function editar($buff){
        foreach($buff as $name => $value){
            $this->datos[] = $value;
            $this->nombres[] = $name;
        }

        $BaseDeDatos = new BaseDeDatos();
        $BaseDeDatos->editar("puestos", $this->datos);
    }


    public function mostrar(){
        for ($i=0; $i < 6 ; $i++) { 
            echo $this->nombres[$i] . " = " . $this->datos[$i] . "<br>";
        }
    }

}
?>