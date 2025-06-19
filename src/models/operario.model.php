<?php
require_once "src/models/conexion.model.php";

class OperarioModel
{
    //funcion para listar operacion y costo de operacion
    function readOperario(){
        try{
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "SELECT operario.id, operario.folio, persona.nombre, persona.apellido_paterno, persona.apellido_materno, operacion_corte.nombre as asignar_operacion
            FROM operario
            JOIN persona ON operario.persona_id = persona.id
            LEFT JOIN operacion_corte ON operario.asignar_operacion = operacion_corte.id;";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
            
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $conexion = null;

            return $result;
        }catch(PDOException $e){
            die("Error de la consulta: ". $e->getMessage());
        }

        }
    
        function readOperacionesEficiencia()
        {
            try {
                $conexionModel = new ConexionModel();
                $conexion = $conexionModel->connect();
    
                $query = "SELECT piezasprod, produccion_planeada FROM operacion_corte";
                $stmt = $conexion->prepare($query);
                $stmt->execute();
                
                // Utiliza fetchAll(PDO::FETCH_ASSOC) para obtener un array asociativo
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
                // Cierra la conexión después de obtener los datos
                $conexion = null;
    
                return $result;
            } catch (PDOException $e) {
                // En lugar de morir, puedes manejar el error de manera más elegante
                // Registra el error o devuelve un mensaje personalizado
                return 'error';
            }
        }
        // En el modelo SalarioModel
public function obtenerSalarioPorUsuario($usuario_id) {
    try {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();

        $query = "SELECT final FROM salario WHERE persona_id = :usuario_id";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':usuario_id', $usuario_id, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        $conexion = null;

        return $result['final']; // Devuelve el salario final del usuario
    } catch (PDOException $e) {
        die("Error en la consulta: " . $e->getMessage());
    }
}

function obtenerDatosOperario($personaId) {
    $conexionModel = new ConexionModel();
    $conexion = $conexionModel->connect();

    $query = "SELECT * FROM persona WHERE id = :personaId";
    $stmt = $conexion->prepare($query);
    $stmt->bindParam(':personaId', $personaId, PDO::PARAM_INT);
    $stmt->execute();

    $operarioData = $stmt->fetch(PDO::FETCH_ASSOC);

    return $operarioData;
}
    
    }

?>