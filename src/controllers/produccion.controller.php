<?php
class ProduccionRealController {
    function agregarProduccionReal() {
        // Implementa la lógica para agregar producción real
        // Manejar la actualización de la producción por hora
        if(isset($_POST['btnActualizar'])){
            $idOperario = isset($_POST['id']) ? $_POST['id'] : null;
            $produccion_por_hora = $_POST["produccion_por_hora"];
            //echo $produccion_por_hora ;
            //echo $idOperario;
            $ProduccionModel = new ProduccionModel();
            $datos = $ProduccionModel->createProduccion($idOperario,$produccion_por_hora);
            
        }
    }

    function mostrarProduccionReal() {
        // Implementa la lógica para mostrar producción real
        //echo '<h2 class="card-title text-center">Detalles</h2>';
        echo $produccion_por_hora ;
    }
    
    function obtenerDatosOperario() { // AL DAR CLIC OBTIENE LOS DATOS PARA IMPRIMIR LA OPERACION 
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            if (isset($_POST['id']) && isset($_POST['nombre'])) {
                $id = $_POST['id'];
                $nombre = $_POST['nombre'];
                //$apellido_paterno = $_POST['apellido_paterno'];
                echo 'Detalles de  con ID ' . $id . ': ' . $nombre;
                echo '<h2 class="card-title text-center">Detalles del corte con ID: '. $id . ': ' . $nombre . '</h2>';
                
                // Llamada a otra función en otra clase pasando $id como parámetro
                //$ProduccionRealModel = new ProduccionModel();
                //$ProduccionRealModel->readOperacionesOperario($id);
            } else {
                echo 'No se proporcionó un ID de operario válido.';
            }
        } else {
            echo 'Método de solicitud no válido.';
        }
    }

    function mostrarProduccionRealNombre() {
        $ProduccionRealModel = new ProduccionRealModel(); // Se corrigió la falta de punto y coma
        $respuesta = $ProduccionRealModel->readProduccionRealNombre(); // Se corrigió la llamada al método

        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }

    function modificarProduccionReal() {
        // Implementa la lógica para modificar producción real
    }

    function eliminarProduccionReal() {
        // Implementa la lógica para eliminar producción real
    }
}
?>
