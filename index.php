<?php 

require_once ("models/Usuario.php");
require_once("controller/UsuarioController.php");
require_once("views/usuario/mostrar.php");


use Pronamespace\controller\UsuarioController;
$controller = new UsuarioController();
$controller->mostrarUsuario('Juan Perez', 'juan.perez@ejemplo.com');
