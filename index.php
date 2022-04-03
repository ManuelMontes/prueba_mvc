<?php
require_once("db/conexion.php");
include "controllers/usuarios_controller.php";

$controller = 'usuarios';

// Todo esta lógica hara el papel de un FrontController
if(!isset($_REQUEST['d']))
{
    require_once 'views/usuarios_vista.phtml';
    //$controller = new usuariosController();
    //$controller->Index();  
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

?>