<?php

class BaseDeDatos {
    
    private $host   ="localhost";
    private $usuario="root";
    private $clave  ="";
    private $db     ="busquedalaboral";
    public  $conexion;

    public function __construct(){
        $this->conexion = new mysqli($this->host, $this->usuario, $this->clave,$this->db) or die(mysql_error());
        $this->conexion->set_charset("utf8");
    }

    public function insertar($tabla, $datos) {
            $resultado = $this->conexion->query("
            INSERT INTO $tabla (nombre, empresa, nivel, remuneracion, habilidadesTecnicas, habilidadesBlandas)
             VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')") or die($this->conexion->error);
            if($resultado)
                return true;
            return false;
    }

    public function mostrar($tabla){
        $resultado = $this->conexion->query("SELECT * FROM $tabla") or die($this->conexion->error);
        if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
    }

    public function editar($tabla, $id){
        $resultado = $this->conexion->query("SELECT * FROM $tabla WHERE id = $id") or die($this->conexion->error);
        if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
    }



}

?>