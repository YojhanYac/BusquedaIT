<?php 

    require_once "BaseDeDatos.php";

    class Puestos {

        private $datos = [];
        private $nombres = [];

        public function insertar($buff){

            $this->foreachBuff($buff);

            $BaseDeDatos = new BaseDeDatos();
            $BaseDeDatos->insertar("puestos", $this->datos);

        }

        public function editar($buff){

            $this->foreachBuff($buff);
            $BaseDeDatos = new BaseDeDatos();
            $BaseDeDatos->editar("puestos", $this->datos);

        }

        public function mostrar(){
            for ($i=0; $i < 6 ; $i++) { 
                echo $this->nombres[$i] . " = " . $this->datos[$i] . "<br>";
            }
        }

        public function eliminar($buff){

            $this->foreachBuff($buff);
            $BaseDeDatos = new BaseDeDatos();
            $BaseDeDatos->eliminar("puestos", $this->datos);

        }

        public function foreachBuff($buff){
            foreach($buff as $name => $value){
                $this->datos[] = $value;
                $this->nombres[] = $name;
            }
        }

    }

?>