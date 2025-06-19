<?php
class ProduccionModel {
    
    function createProduccion($idOperario, $produccion_por_hora) {
        // Aquí iría la lógica para crear una producción
    
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();
        //actualizar el dato actual de piezasprod
        $query_actualizacion = "UPDATE operacion_corte SET piezasprod  = :pr WHERE id = :id;";
        $stmt_actualizacion = $conexion->prepare($query_actualizacion);
        $stmt_actualizacion->bindParam(":id", $idOperario, PDO::PARAM_INT);
        $stmt_actualizacion->bindParam(":pr", $produccion_por_hora, PDO::PARAM_INT);
        $stmt_actualizacion->execute();
    
        // Actualizar la producción por hora actual
        $query_actualizacion = "INSERT INTO produccion_actual (operario_id, produccion_por_hora) VALUES (:id, :pr)";
        $stmt_actualizacion = $conexion->prepare($query_actualizacion);
        $stmt_actualizacion->bindParam(":id", $idOperario, PDO::PARAM_INT);
        $stmt_actualizacion->bindParam(":pr", $produccion_por_hora, PDO::PARAM_INT);
        $stmt_actualizacion->execute();
    
        // Agregar una nueva entrada al historial
        $query_historial = "INSERT INTO historial_produccion (operario_id, produccion_por_hora) VALUES (:id, :pr)";
        $stmt_historial = $conexion->prepare($query_historial);
        $stmt_historial->bindParam(":id", $idOperario, PDO::PARAM_INT);
        $stmt_historial->bindParam(":pr", $produccion_por_hora, PDO::PARAM_INT);
        $stmt_historial->execute();
    
        $stmt_actualizacion->closeCursor();  // En lugar de close(), ya que estás usando PDO
        $stmt_historial->closeCursor();  // En lugar de close(), ya que estás usando PDO
        
        $conexion = null;  // Cerrar la conexión
    
        return true;  // Opcional: puedes devolver un indicador de éxito o algún otro valor según tus necesidades
    }
    
    

    function readProduccion() {
        // Aquí iría la lógica para leer la producción
    }
    //no se usan, borrar
    function readOperacionesOperario($id) {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "SELECT nombre, codigo FROM operacion_corte WHERE id = :id";
            $stmt = $conexion->prepare($query);
            $stmt->bindParam(':id', $id);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            // Cerrar la conexión (opcional, PDO lo cerrará automáticamente al finalizar el script)
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }

    function updateUsuario() {
        // Aquí iría la lógica para actualizar un usuario
    }

    function deleteUsuario() {
        // Aquí iría la lógica para eliminar un usuario
    }
}
?>
