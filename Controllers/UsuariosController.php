<?php
class UsuariosController extends ControladorBase{
    public $conectar;
	public $adapter;
	
    public function __construct() {
        parent::__construct();
		 
        $this->conectar = new ConectarBaseDatos();
        $this->adapter = $this->conectar->conexion();
    }
        
    public function index(){
        if(!isset($_POST["c"])){
            $usuario = new Usuario($this->adapter);
        
            //Conseguimos todos los usuarios
            $allusers = $usuario->getAll();
            
            //Cargamos la vista index y le pasamos valores
            $this->view("index",array(
            "allusers"=>$allusers
            ));    
    }
        else{
            $fin = $_POST["c"];
            //$controller = new usuariosController();
            //$controller->Consultar();
            // display JSON data
                    
            //Conseguimos todos los usuarios
            $allusers = $usuario->getAll();
            echo json_encode($fin);       
            
            //Cargamos la vista index y le pasamos valores
            $this->view("index",array(
            "allusers"=>$allusers
            ));
        }
    }
        
    public function crear(){
        if(isset($_POST["nombre"])){
        
        //Creamos un usuario
        $usuario=new Usuario($this->adapter); // se debe agregar dentro del parentesis ($this->adapter)
        $usuario->setNombre($_POST["nombreUsuario"]);
        $usuario->setApellidoPaternoUsuario($_POST["apellidoPaternoUsuario"]);
        $usuario->setApellidoMaternoUsuario($_POST["apellidoMaternoUsuario"]);
        $usuario->setEdadUsuario($_POST["edad"]);
        $save=$usuario->save();
        }
        $this->redirect("Usuarios", "index");
    }
        
    public function borrar(){
        if(isset($_GET["id"])){
            $id=(int)$_GET["id"];
            
            $usuario=new Usuario($this->adapter); // se debe agregar dentro del parentesis ($this->adapter)
            $usuario->deleteById($id);
        }
        $this->redirect();
    }
        
    public function hola(){
        $usuarios=new UsuariosModel($this->adapter);
        $usu=$usuarios->getUnUsuario();
        var_dump($usu);
    }
        
}
?>