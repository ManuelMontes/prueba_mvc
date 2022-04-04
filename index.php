<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <title>Document</title>
</head>
<body>
    <h4>Holi</h4>
    <h4>Clientes Listados</h4>
    <div class="container">
        <div class="table responsive">
            <table class="table table-striped">
                <thead>
                    <tr>
                        <th>Id Usuario</th>
                        <th>Nombre Usuario</th>
                        <th>Apellido Paterno</th>
                        <th>Apellido Materno</t<h>
                        <th>Edad</t<h>
                    </tr>
                </thead>
                <tbody id="DataResult">

                </tbody>
            </table>
            <a href="#">
            </a>
            <input type="submit" class="btn btn-success" onclick="v()" value="Agregar nuevo Cliente">
        </div>
    </div>
    <button onclick="v()">rrr</button>
</body>

<script>

function v(){
    $.ajax({
        url: 'index.php', // get the route value
        //url: 'Controllers/UsuariosController.php', // get the route value
        type: 'GET', //we are using POST method to submit the data to the server side
        //dataType: "JSON",
	    data: { 'controller' : 'Consulta'} , // our serialized array data for server side
	        success: function (data) {//once the request successfully process to the server side it will return result here
                console.log(data);//alert(data);
        /*        var html = '';
                var i;
         for (i = 0; i < data.length; i++) {
           html += '<tr>' +
             '<td>' + data[i].idUsuario + '</td>' +
             '<td>' + data[i].nombreUsuario + '</td>' +
             '<td>' + data[i].apellidoPaternoUsuario + '</td>' +
             '<td>' + data[i].apellidoMaternoUsuario + '</td>' +
             '<td>' + data[i].edadUsuario + '</td>' +
             '</tr>';
         }
         $('#DataResult').html(html);*/
	        },
	        error: function (XMLHttpRequest, textStatus, errorThrown) {
                alert('Error...');
	        }
	    });
}


/*$(document).ready(function(){
    $.ajax({
       url: 'Controllers/usuarios_controller.php',
       //url: '../hola.php'
       type: "POST",
       data: {
           'c' : 'Consultar'
     },
     //dataType: "JSON",
       success: function(data) {
         console.log(data);//alert(data);
         /*var html = '';
         var i;
         for (i = 0; i < data.length; i++) {
           html += '<tr>' +
             '<td>' + data[i].idUsuario + '</td>' +
             '<td>' + data[i].nombreUsuario + '</td>' +
             '<td>' + data[i].apellidoPaternoUsuario + '</td>' +
             '<td>' + data[i].apellidoMaternoUsuario + '</td>' +
             '<td>' + data[i].edadUsuario + '</td>' +
             '</tr>';
         }
         $('#DataResult').html(html);
       },
       error: function(jqXHR, textStatus, errorThrown) {
         alert('Error...');
       }
     });
})*/
    </script>

</html>

<?php
//Configuración global
//require_once 'config/global.php';

//Base para los controladores
require_once 'core/ControladorBase.php';

//Funciones para el controlador frontal
require_once 'core/ControladorFrontal.func.php';

//Cargamos controladores y acciones
if(isset($_GET["controller"])){
    if($_GET["controller"] == 'Consulta'){
        echo 'Consul';
    }else{
        echo 'No';
    }
    $controllerObj=cargarControlador($_GET["controller"]);
    lanzarAccion($controllerObj);
}else{
    $controllerObj=cargarControlador("Usuarios");
    lanzarAccion($controllerObj);
}
?>


<?php
//require_once("db/conexion.php");
//include "controllers/usuarios_controller.php";
/*$controller = 'usuarios';

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
}*/

?>