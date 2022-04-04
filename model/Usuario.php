<?php
class Usuario extends EntidadBase{

    private $idUsuario;
    private $nombreUsuario;
    private $apellidoMaternoUsuario;
    private $apellidoPaternoUsuario;
    private $edadUsuario;

    public function __construct($adapter) {
        $table="usuario";
        parent::__construct($table, $adapter);
    }
    
    public function getIdUsuario()
    {
        return $this->idUsuario;
    }

    public function setIdUsuario($idUsuario)
    {
        $this->idUsuario = $idUsuario;

        return $this;
    }

    public function getNombreUsuario()
    {
        return $this->nombreUsuario;
    }

    public function setNombreUsuario($nombreUsuario)
    {
        $this->nombreUsuario = $nombreUsuario;

        return $this;
    }

    public function getApellidoMaternoUsuario()
    {
        return $this->apellidoMaternoUsuario;
    }

    public function setApellidoMaternoUsuario($apellidoMaternoUsuario)
    {
        $this->apellidoMaternoUsuario = $apellidoMaternoUsuario;

        return $this;
    }

    public function getApellidoPaternoUsuario()
    {
        return $this->apellidoPaternoUsuario;
    }

    public function setApellidoPaternoUsuario($apellidoPaternoUsuario)
    {
        $this->apellidoPaternoUsuario = $apellidoPaternoUsuario;

        return $this;
    }

    public function getEdadUsuario()
    {
        return $this->edadUsuario;
    }

    public function setEdadUsuario($edadUsuario)
    {
        $this->edadUsuario = $edadUsuario;

        return $this;
    }

    public function save(){
        $query="INSERT INTO usuarios (id,nombre,apellido,email,password)
                VALUES(NULL,
                       '".$this->nombre."',
                       '".$this->apellido."',
                       '".$this->email."',
                       '".$this->password."');";
        $save=$this->db()->query($query);
        //$this->db()->error;
        return $save;
    }
}

?>

