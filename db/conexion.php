<?php
    class conexion {

        private $conexion;
        private $controlador = "mysql";
        private $servidor = "localhost";
        private $baseDatos = "hola";
        private $puerto = "3306";
        private $usuario = "root";
        private $contrasena = "";
        private $codificacion = "utf8mb4";

        public function __construct() {
        
        }

        public function conectar() {
            try {
                $conexion = mysqli_connect($serivdor,$usuario,$contrasena,$baseDatos);
                return $this->conexion;
            } catch (Exception $exc) {
                echo $exc->getTraceAsString();
            }
        }

        public static function conexionDB(){
            $conexion=new mysqli("localhost", "root", "", "hola");
            $conexion->query("SET NAMES 'utf8'");
            return $conexion;
        }
    
    }

?>