<?php
class OperacionController {
    function agregarOperacion() {
        if(isset($_POST['btnGuardar'])){
            $nombre = $_POST['nombre'];
            $codigo = $_POST['codigo'];
            $tiempo_estandar = $_POST['tiempo_estandar'];
            $costo = $_POST['costo'];
            //$produccion_planeada = $_POST['produccion_planeada'];
            

            echo "Se ha agregado la nueva operación: " . $nombre . "<br>". $codigo . "<br>". $tiempo_estandar. "<br>". $costo;
            $OperacionModel = new OperacionModel();
            $datos = $OperacionModel->createOperacion($nombre,$codigo,$tiempo_estandar,$costo);
        }
    }    
    //muestra las operaciones en un select
    function mostrarNombreOperacion() {
        $OperacionModel = new OperacionModel();
        $result = $OperacionModel->readOperacion();

        if (!empty($result)) {
            foreach ($result as $row) {
                echo "<option value='" . $row['id'] . "'>" . $row['nombre'] . "</option>";
            }
        } else {
            echo "<option value=''>No existe una operación disponible.</option>";
        }
        // Devuelve los datos
        return $result;
    }
    //Muestra todas las operaciones que existen
    function mostrarOperacion() {
        $OperacionModel = new OperacionModel();
        $OperacionModel->readOperacion();
        $respuesta = $OperacionModel->readOperacion();
        
        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }

    function mostrarMaquinaria() {
        $OperacionModel = new OperacionModel();
        $OperacionModel->readMaquinaria();
        $respuesta = $OperacionModel->readMaquinaria();
        
        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }

    //Muestra todas las operaciones que existen con su usuario asignado
    function mostrarOperacionConUsuarioAsig() {
        $OperacionModel = new OperacionModel();
        $OperacionModel->readOperacionConUsuarioAsig();
        $respuesta = $OperacionModel->readOperacionConUsuarioAsig();
        
        if ($respuesta !== 'error') {
            return $respuesta;
        } else {
            return [];
        }
    }
    //Funcion para mostrar las operaciones que corresponden a cada corte según su id
    function mostrarOperacionesAsignadas() {
        $OperacionModel = new OperacionModel();
        $operaciones = $OperacionModel->readOperacionAsignadaOperario();
    
        $operacionesAsignadas = array();
        foreach ($operaciones as $operacion) {
            if (!empty($operacion['nombre_operacion'])) {
                $operacionesAsignadas[] = $operacion['nombre_operacion'];
            }
        }
    
        return $operacionesAsignadas;
    }
    //muestra la operacion que tiene asignada el operario segun el id del operario
    function mostrarOperacionDeOperario() {
        //if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            //if (isset($_POST['id']) && isset($_POST['nombre'])) {
                //$idOperario = $_POST['id'];
    
                //$OperacionModel = new OperacionModel();
                //$datosCalculados = $OperacionModel->readTimeOperaYNumOperarios();


                $OperacionModel = new OperacionModel();
                $datos = $OperacionModel->readOperacionDeOperario();

                foreach ($datos as &$operacion) {
                    // Verifica si el divisor es diferente de cero antes de realizar la división
                    $operacion['eficiencia'] = ($operacion['piezasprod'] != 0) ? $operacion['piezasprod'] / 285 : 0;                
                    // Verifica si los denominadores son diferentes de cero antes de realizar las divisiones
                    $operacion['objetivoSisUni'] = ($operacion['total_tiempo_estandar'] != 0) ? 
                        ($operacion['jornadaLaboral'] * 60 * $operacion['total_operarios']) / $operacion['total_tiempo_estandar'] : 0;
                    
                    $operacion['costoDia'] =  $operacion['salario_por_dia'] / 5;
                    $operacion['calcu'] = $operacion['costoDia'] / $operacion['jornadaLaboral'];
                    $operacion['calcu2'] =  $operacion['calcu'] / 60;
                    $operacion['costo'] = $operacion['calcu2'] * $operacion['tiempo_estandar'];
                    
                    
                    $operacion['produccionPlaneadaDia'] = 570 / $operacion['tiempo_estandar'];
                    $operacion['produccionPlaneadaHora'] = $operacion['objetivoSisUni'] / 4; //4 horarios pero va a ser dinamico
                    $operacion['diferencia'] = $operacion['piezasprod'] - $operacion['produccionPlaneadaHora'];
                }
                
                return $datos;
                
    
                /*if ($respuesta !== 'error') {
                    return $respuesta;
                } else {
                    return [];
                }*/
            //} else {
                //echo 'No se proporcionó un ID de operario válido.';
            //}
        //} else {
            //echo 'Método de solicitud no válido.';
        //}
    }
    //funcion para obtener variables para hacer el update en el modelo para asignar operaciones al operario
    function actualizarAsignacionOperacion() {
        if(isset($_POST['btnActualizar'])){
            $idOperacion = isset($_POST['id_operacion']) ? $_POST['id_operacion'] : null; // Asegúrate de manejar el caso en que no se haya seleccionado ninguna categoría
            $idOperario = $_POST['id_operario'];
            //echo "Datos ingresados:<br>";
            //echo "id operacion: " . $idOperacion . "<br>";
            //echo "id operario: " . $idOperario . "<br>";
            $OperacionModel = new OperacionModel();
            $datos = $OperacionModel->updateAsignacionOperacionActualiza($idOperacion,$idOperario);


            // Aquí puedes realizar las operaciones necesarias para almacenar los datos en tu base de datos
        }
    }
    function modificarOperacion() {}
    function eliminarOperacion() {
        if(isset($_POST['btnEliminarOperacion'])){
            $id_operacion = $_POST["id_operacion"];
            

            //echo "Se ha eliminado la Operacion: " . $id_operacion. "<br>";
            $OperacionModel = new OperacionModel();
            $datos = $OperacionModel->deleteOperacion($id_operacion);
        }
    }
    //obtener el id del operario para poder eliminar su asignacion de operacion
    function obtenerIdOperario() {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['quitar'])) {
            // Verificar que se ha enviado un ID válido
            if (isset($_POST['id']) && is_numeric($_POST['id'])) {
                $idOperario = $_POST['id'];
                echo $idOperario;
                // Realizar la lógica de actualización
                try {
                    $OperacionModel = new OperacionModel();
                    $OperacionModel->updateAsignacionOperacion($idOperario);
        
                    // Puedes enviar una respuesta JSON si es necesario
                    //echo json_encode(array('success' => true));
                    exit();
                } catch (Exception $e) {
                    // Manejar errores, podrías enviar un mensaje de error en formato JSON
                    echo json_encode(array('success' => false, 'message' => $e->getMessage()));
                    exit();
                }
            }
        }
    }
    function mostrarOperacionesDisponibles() {
        $OperacionModel = new OperacionModel();
        $operacionesDisponibles = $OperacionModel->operacionesDisponibles();
    
        if (!empty($operacionesDisponibles)) {
            foreach ($operacionesDisponibles as $operacion) {
                echo "<option value='" . $operacion['nombre_operacion'] . "'>" . $operacion['nombre_operacion'] . "</option>";
            }
        } else {
            echo "<option value=''>No hay operaciones disponibles.</option>";
        }
        // Devuelve los datos
        return $operacionesDisponibles;
    }
    
    function obtenerDatosOperario() {
        // Asegúrate de tener el ID específico de la persona que deseas mostrar
        $idPersonaEspecifico = 5; 
        // Obtén los datos del operario usando el ID de la persona específica
        $OperacionModel = new OperacionModel();
        $operarioData = $OperacionModel->obtenerDatosOperario($idPersonaEspecifico);
    
        // Verifica si se obtuvieron los datos del operario antes de continuar
        if (!empty($operarioData)) {
               
            return $operarioData;
        } else {
            // Maneja el caso en el que no se pudieron obtener los datos del operario
            echo "No se encontraron datos del operario.";
            return [];
        }
    }
    
    
    
}
?>
