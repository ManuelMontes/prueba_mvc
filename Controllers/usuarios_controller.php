<?php

//include "models/usuarios_model.php";
require_once "models/usuarios_model.php";

// Todo esta lógica hara el papel de un FrontController
if(!isset($_POST['c']))
{
    $fin = $_POST["c"];
    //$controller = new usuariosController();
    //$controller->Consultar();
    echo $fin;
    //require_once 'views/usuarios_vista.phtml';
}
else
{
    // Obtenemos el controlador que queremos cargar
    $controller = strtolower($_REQUEST['c']);
    $accion = isset($_REQUEST['a']) ? $_REQUEST['a'] : 'Index';

    // Instanciamos el controlador
    require_once "controller/$controller.controller.php";
    $controller = ucwords($controller) . 'Controller';
    $controller = new $controller;

    // Llama la accion
    call_user_func( array( $controller, $accion ) );
}

/*
class usuariosController{
    
    private $model;
    
    public function __CONSTRUCT(){
        $this->model = new usuarios_model();
    }
    
    public function Index(){
        $fin = $_POST["c"];
        //$controller = new usuariosController();
        //$controller->Consultar();
        echo $fin;
        $usuarios = new usuarios_model();
        $datos = $usuarios->listarUsuarios();
        // display JSON data
        
        echo json_encode($datos);
        //echo 'hu';
        //require_once 'views/usuarios_vista.phtml';
        //require_once 'view/alumno/alumno.php';
        //require_once 'view/footer.php';
    }
    
    public function Crud(){
        $usuario = new usuarios_model();
        
        if(isset($_REQUEST['id'])){
            $usuario = $this->model->Obtener($_REQUEST['id']);
        }
        
        require_once 'view/header.php';
        require_once 'view/alumno/alumno-editar.php';
        require_once 'view/footer.php';
    }
    
    public function Guardar(){
        $usuario = new usuarios_model();
        
        $alm->id = $_REQUEST['id'];
        $alm->Nombre = $_REQUEST['Nombre'];
        $alm->Apellido = $_REQUEST['Apellido'];
        $alm->Correo = $_REQUEST['Correo'];
        $alm->Sexo = $_REQUEST['Sexo'];
        $alm->FechaNacimiento = $_REQUEST['FechaNacimiento'];

        $alm->id > 0 
            ? $this->model->Actualizar($alm)
            : $this->model->Registrar($alm);
        
        header('Location: index.php');
    }
    
    public function Eliminar(){
        $this->model->Eliminar($_REQUEST['id']);
        header('Location: index.php');
    }

    public function Consultar(){
        $datos = array();
        $datos = $this->model->listarUsuarios(); 
        echo json_encode ($datos);
    }
}*/
?>
