<?php 

namespace Pronamespace\Views\Usuario;

use Pronamespace\Models\Usuario;

class UsuarioView{
    public function mostrar(Usuario $usuario){
        echo "nombre: " .$usuario->getNombre(). "<br>";
        echo "Email: ". $usuario->getEmail() ."<br>"; 
    }
}