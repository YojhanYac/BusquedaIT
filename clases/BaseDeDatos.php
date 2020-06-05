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

        // $validate = $this->mostrarPorId($tabla, $datos['id']);
        //var_dump($datos);
        // if(empty($validate)){
        //     return false;
        // }
        // else {

            $resultado = $this->conexion->query("
            INSERT INTO $tabla (nombre, empresa, nivel, remuneracion, habilidadesTecnicas, habilidadesBlandas)
             VALUES ('$datos[0]','$datos[1]','$datos[2]','$datos[3]','$datos[4]','$datos[5]')") or die($this->conexion->error);
            if($resultado)
                return true;
            return false;
        // }
    }

    public function mostrar($tabla){
        $resultado = $this->conexion->query("SELECT * FROM $tabla") or die($this->conexion->error);
        if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
    }

    public function mostrarPorId($tabla, $id){
        $resultado = $this->conexion->query("SELECT * FROM $tabla WHERE id = $id") or die($this->conexion->error);
        if($resultado)
            return $resultado->fetch_all(MYSQLI_ASSOC);
        return false;
    }

    public function editar($tabla, $datos){
        //var_dump($datos);
        $resultado = $this->conexion->query("UPDATE $tabla SET nombre = '$datos[1]' , empresa = '$datos[2]', nivel = '$datos[3]', remuneracion = '$datos[4]', habilidadesTecnicas  = '$datos[5]', habilidadesBlandas = '$datos[6]' WHERE id = '$datos[0]'") or die($this->conexion->error);
        if($resultado)
                 return true;
        return false;
    }

    public function eliminar($tabla, $id){
        //var_dump($datos);
        $resultado = $this->conexion->query("DELETE FROM $tabla WHERE id = $id") or die($this->conexion->error);
        if($resultado)
                 return true;
        return false;
    }



}

?>