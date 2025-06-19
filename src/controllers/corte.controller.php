<?php
class CorteController {

    //Funcion para obtener con un click el id y nombre del corte para mostrarlos en la vista Ver de Detalles del corte
    function obtenerDatosCorte() {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id']) && isset($_POST['nombre'])) {
                $idCorte = $_POST['id'];
                $nombre = $_POST['nombre'];
                //echo 'Detalles del corte con ID ' . $idCorte . ': ' . $nombre;   //obtener el id para pasarlo por parametro
                echo '<h2 class="card-title text-center">Detalles del corte con ID: '. $nombre . '</h2>';
                
                // Llamada a otra función en otra clase pasando $idCorte como parámetro
                $OperacionModel = new OperacionModel();
                $OperacionModel->readOperacionDeCorte($idCorte);
            } else {
                echo 'No se proporcionó un ID de corte válido.';
            }
        } else {
            echo 'Método de solicitud no válido.';
        }
    }

    function agregarCorte() {
        if(isset($_POST['btnGuardar'])){
            $nombre = $_POST['nombre'];
            $costo = $_POST['costo'];
            $operacion = $_POST['nombre'];

            echo "Se han agreado los siguientes datos correctamente: " . $nombre . $costo ;
            $CorteModel = new CorteModel();
            $datos = $CorteModel->createCorte($nombre, $costo);
        }
    }
    function mostrarCorte() {
        $CorteModel = new CorteModel();
        $CorteModel->readCorte();
        $respuesta = $CorteModel->readCorte();
        
        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }
    function contadorDeCortes() {
        $CorteModel = new CorteModel();
        return $CorteModel->contadorDeCortes();
    }
    function modificarCorte() {}
    function eliminarCorte() {}
}
?>