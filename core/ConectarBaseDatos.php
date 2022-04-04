<?php
class ConectarBaseDatos{
    private $driver;
    private $host, $user, $pass, $database, $charset;
  
    public function __construct() {
        require_once 'db/database.php';
        $database = new conexion();
        $this->driver = $database->getControlador();
        $this->host = $database-> getServidor();
        $this->user = $database-> getUsuario();
        $this->pass = $database -> getContrasena();
        $this->database = $database-> getBaseDatos();
        $this->charset = $database-> getCodificacion();
    }
    
    public function conexion(){
        
        if($this->driver=="mysql" || $this->driver==null){
            $con=new mysqli($this->host, $this->user, $this->pass, $this->database);
            $con->query("SET NAMES '".$this->charset."'");
        }
        
        return $con;
    }
}
?>
