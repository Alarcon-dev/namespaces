<?php 

namespace Pronamespace\controller;

use Pronamespace\Models\Usuario;
use Pronamespace\Views\Usuario\UsuarioView;

class UsuarioController{
    public function mostrarUsuario($nombre, $email){
        $usuario = new usuario($nombre, $email);
        $usuarioView = new Usuarioview();
        $usuarioView -> mostrar($usuario);
    }
}