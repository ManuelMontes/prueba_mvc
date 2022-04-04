<?php
    class conexion {

        private $controlador;
        private $servidor;
        private $baseDatos;
        private $puerto;
        private $usuario;
        private $contrasena;
        private $codificacion;

        public function __construct() {
            $this->controlador = "mysql";
            $this->servidor = "localhost";
            $this->baseDatos = "hola";
            $this->puerto = "3306";
            $this->usuario = "root";
            $this->contrasena = "";
            $this->codificacion = "utf8mb4";
    
        }

        /**
         * Get the value of controlador
         */ 
        public function getControlador()
        {
                return $this->controlador;
        }

        /**
         * Set the value of controlador
         *
         * @return  self
         */ 
        public function setControlador($controlador)
        {
                $this->controlador = $controlador;

                return $this;
        }

        /**
         * Get the value of servidor
         */ 
        public function getServidor()
        {
                return $this->servidor;
        }

        /**
         * Set the value of servidor
         *
         * @return  self
         */ 
        public function setServidor($servidor)
        {
                $this->servidor = $servidor;

                return $this;
        }

        /**
         * Get the value of baseDatos
         */ 
        public function getBaseDatos()
        {
                return $this->baseDatos;
        }

        /**
         * Set the value of baseDatos
         *
         * @return  self
         */ 
        public function setBaseDatos($baseDatos)
        {
                $this->baseDatos = $baseDatos;

                return $this;
        }

        /**
         * Get the value of puerto
         */ 
        public function getPuerto()
        {
                return $this->puerto;
        }

        /**
         * Set the value of puerto
         *
         * @return  self
         */ 
        public function setPuerto($puerto)
        {
                $this->puerto = $puerto;

                return $this;
        }


        /**
         * Get the value of usuario
         */ 
        public function getUsuario()
        {
                return $this->usuario;
        }

        /**
         * Set the value of usuario
         *
         * @return  self
         */ 
        public function setUsuario($usuario)
        {
                $this->usuario = $usuario;

                return $this;
        }

        /**
         * Get the value of contrasena
         */ 
        public function getContrasena()
        {
                return $this->contrasena;
        }

        /**
         * Set the value of contrasena
         *
         * @return  self
         */ 
        public function setContrasena($contrasena)
        {
                $this->contrasena = $contrasena;

                return $this;
        }

        /**
         * Get the value of codificacion
         */ 
        public function getCodificacion()
        {
                return $this->codificacion;
        }

        /**
         * Set the value of codificacion
         *
         * @return  self
         */ 
        public function setCodificacion($codificacion)
        {
                $this->codificacion = $codificacion;

                return $this;
        }
    }

?>