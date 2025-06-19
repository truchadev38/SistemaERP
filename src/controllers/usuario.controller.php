<?php
class UsuarioController {
    function agregarUsuario() {
    }
    function mostrarUsuario() {
    }
    //obtiene el rol para poder consultar su nombre
    function mostrarNombreUsuario() {
        if (isset($_SESSION['rol'])) {
            $rol = $_SESSION['rol'];
            //echo $rol;
            $UsuarioModel = new UsuarioModel();
            $respuesta = $UsuarioModel->readNombreUsuario($rol);

            if ($respuesta !== 'error') {
                return $respuesta;
            } else {
                return [];
            }
        }
    }
    function mostrarUsuarioNombre() {
        $UsuarioModel = new UsuarioModel();
        $UsuarioModel->readUsuarioNombre();
        $respuesta = $UsuarioModel->readUsuarioNombre();

        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }

    function mostrarUsuarioNombreOperario() {
        $UsuarioModel = new UsuarioModel();
        $UsuarioModel->readUsuarioNombre();
        $respuesta = $UsuarioModel->readUsuarioNombreOperario();

        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }
    function modificarUsuario() {}
    function eliminarUsuario() {}
}
?>