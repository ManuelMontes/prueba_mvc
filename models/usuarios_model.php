<?php


class usuarios_model{
    private $db;
    private $usuarios;
    private $idUsuario;
    private $nombreUsuario;
    private $apellidoMaternoUsuario;
    private $apellidoPaternoUsuario;
    private $edadUsuario;
 
    public function __construct(){
        $this->usuarios = array();
        $this->db = conexion::conexionDB();
    }
    
    public function listarUsuarios(){
        
        $consulta = $this->db->query("select * from usuario;");
        while($filas=$consulta->fetch_assoc()){
            $this->usuarios[]=$filas;
        }
        return $this->usuarios;
    }

	public function consultarUsuario($id)
	{
		try 
		{
			$consulta = $this->db->query("SELECT * FROM usuario WHERE id = ".$idUsuario.";");
			$filas = mysql_fetch_row($resultado);
			return $fila = mysql_fetch_row($resultado);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Eliminar($id)
	{
		try 
		{
			$consulta = $this->db->query("DELETE FROM usuario WHERE id = ".$idUsuario."");
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Actualizar($data)
	{
		try 
		{
			$sql = "UPDATE alumnos SET 
						Nombre          = ?, 
						Apellido        = ?,
                        Correo        = ?,
						Sexo            = ?, 
						FechaNacimiento = ?
				    WHERE id = ?";

			$this->pdo->prepare($sql)
			     ->execute(
				    array(
                        $data->Nombre, 
                        $data->Correo,
                        $data->Apellido,
                        $data->Sexo,
                        $data->FechaNacimiento,
                        $data->id
					)
				);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}

	public function Registrar(Alumno $data)
	{
		try 
		{
		$sql = "INSERT INTO alumnos (Nombre,Correo,Apellido,Sexo,FechaNacimiento,FechaRegistro) 
		        VALUES (?, ?, ?, ?, ?, ?)";

		$this->pdo->prepare($sql)
		     ->execute(
				array(
                    $data->Nombre,
                    $data->Correo, 
                    $data->Apellido, 
                    $data->Sexo,
                    $data->FechaNacimiento,
                    date('Y-m-d')
                )
			);
		} catch (Exception $e) 
		{
			die($e->getMessage());
		}
	}
}
?>