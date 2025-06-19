<?php
class OperacionModel {
    function createOperacion($nombre,$codigo,$tiempo_estandar,$costo) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();

        $query = "insert into operacion_corte (nombre,codigo,tiempo_estandar,costo,jornadaLaboral) values ('$nombre','$codigo','$tiempo_estandar','$costo',9.5);";
        $stmt = $conexion->prepare($query);
        $stmt->execute();
    }
    // function setIdOperacionDeCorte ($idCorte) {
    //     $idCorteOpe = $idCorte;
    // }
    function readOperacion() {
        try{
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "SELECT * FROM operacion_corte";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }


    function readMaquinaria() {
        try{
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "SELECT * FROM maquinaria";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }

    //muestra las operaciones que pertenecen al corte segun su id del corte 
    function readOperacionDeCorte($idCorte) {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "SELECT *
                      FROM operacion_corte
                      JOIN corte_ope ON operacion_corte.id = corte_ope.id_operacion_corte
                      WHERE corte_ope.id_corte = :id";
            $stmt = $conexion->prepare($query);
            $stmt->bindParam(':id', $idCorte, PDO::PARAM_INT);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    //muestra la operacion que tiene asignada el operario segun el id del operario
    function readOperacionDeOperario() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "SELECT 
            operario.id, 
            operario.folio, 
            persona.nombre, 
            persona.apellido_paterno, 
            persona.apellido_materno, 
            operacion_corte.nombre as asignar_operacion, 
            operacion_corte.codigo,
            operacion_corte.piezasprod as piezasprod,
            operacion_corte.jornadaLaboral,
            operacion_corte.tiempo_estandar,
            s.por_dia as salario_por_dia,
            COALESCE(rt.total_operarios, 0) as total_operarios,
            COALESCE(rt.total_tiempo_estandar, 0) as total_tiempo_estandar
        FROM 
            operario
        JOIN 
            persona ON operario.persona_id = persona.id
        JOIN 
            operacion_corte ON operario.asignar_operacion = operacion_corte.id
        LEFT JOIN 
            readTimeOperaYNumOperarios rt ON operario.id = rt.id
        LEFT JOIN 
            salario s ON operario.id = s.usuario_id
        ORDER BY
            operario.id ASC;
        
        ";
            //"SELECT oc.* FROM operario o JOIN operacion_corte oc ON o.asignar_operacion = oc.id";
            //WHERE o.id = :id";
            $stmt = $conexion->prepare($query);
            //$stmt->bindParam(':id', $idOperario, PDO::PARAM_INT);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    //listar datos de todas las operaciones junto con los operarios asignados si es que los hay 
    function readOperacionConUsuarioAsig() {
        try{
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "SELECT
            oc.id AS id_operacion,
            oc.nombre AS nombre_operacion,
            oc.codigo,
            oc.tiempo_estandar,
            oc.costo,
            oc.piezasprod,
            oc.porcentaje_incremento,
            oc.produccion_planeada,
            o.id AS id_operario,
            o.folio,
            p.nombre AS nombre_operario,
            p.apellido_paterno,
            p.apellido_materno
        FROM
            operacion_corte oc
        LEFT JOIN operario o ON oc.id = o.asignar_operacion
        LEFT JOIN persona p ON o.persona_id = p.id;";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    //actualizar asignacion de operacion al operario, elimina la asiganacion
    function updateAsignacionOperacion($idOperario) {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "UPDATE operario SET asignar_operacion = NULL WHERE id = :id";
            $stmt = $conexion->prepare($query);
            $stmt->bindParam(':id', $idOperario, PDO::PARAM_INT);
            $stmt->execute();
    
            $conexion = null;
            //echo "Operación realizada con éxito " . $idOperario;
            // No estás retornando ningún resultado, podrías retornar un mensaje o estado si lo deseas
            return true;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    function readOperacionAsignadaOperario() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "SELECT oc.nombre AS nombre_operacion
                    FROM operacion_corte oc
                    INNER JOIN operario o ON oc.id = o.asignar_operacion";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    
    //actualizar asignacion de operacion al operario, cambia la asiganacion
    function updateAsignacionOperacionActualiza($idOperacion,$idOperario) {
    try {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();

        $query = "UPDATE operario SET asignar_operacion = :idOperacion WHERE id = :idOperario";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':idOperacion', $idOperacion, PDO::PARAM_INT);
        $stmt->bindParam(':idOperario', $idOperario, PDO::PARAM_INT);
        $stmt->execute();

        // Puedes retornar un mensaje de éxito o estado
        $mensaje = "Operación realizada con éxito para el operario ID: $idOperario";
        return array('success' => true, 'message' => $mensaje);
    } catch (PDOException $e) {
        // Puedes retornar un mensaje de error o estado
        return array('success' => false, 'message' => "Error en la consulta: " . $e->getMessage());
    } finally {
        // Asegúrate de cerrar la conexión en el bloque 'finally'
        if ($conexion) {
            $conexion = null;
        }
    }
}
function readTimeOperaYNumOperarios(){
    try {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();

        $query = "SELECT 
            (SELECT COUNT(*) FROM operario) AS total_operarios,
            (SELECT SUM(tiempo_estandar) FROM operacion_corte) AS total_tiempo_estandar";
          
        $stmt = $conexion->prepare($query);
        $stmt->execute();

        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

        $conexion = null;

        return $result;
    } catch (PDOException $e) {
        die("Error en la consulta: " . $e->getMessage());
    }
}

function obtenerDatosOperario($id) {
    try {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();

        $query = "SELECT nombre, curp, rfc, nss FROM persona WHERE id = :id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':id', $id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $conexion = null;

        return $result;
    } catch (PDOException $e) {
        die("Error en la consulta: " . $e->getMessage());
    }
}



    function updateOperacion() {}
    function deleteOperacion($id_operacion) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();
    
        // Preparar la consulta SQL para eliminar el registro
        $query = "DELETE FROM operacion_corte WHERE id = :id";
        // Preparar la declaración
        $stmt = $conexion->prepare($query);
        // Vincular el parámetro :id
        $stmt->bindParam(':id', $id_operacion, PDO::PARAM_INT);
        // Ejecutar la consulta
        if ($stmt->execute()) {
            // Si la consulta se ejecuta correctamente, retorna true
            return true;
        } else {
            // Si hay algún error, puedes manejarlo aquí
            return false;
        }
    }
}
?>
