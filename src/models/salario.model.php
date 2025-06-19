<?php
class SalarioModel
{
    // Funcion para CRUD a la BD de SALARIO
    function createSalario($usuarioId, $salario) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();
        
        // Actualizar la producción por hora actual
        $query = "insert into salario (por_dia, usuario_id ) values (:porDia, :usuarioId)";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(":porDia", $salario, PDO::PARAM_INT);
        $stmt->bindParam(":usuarioId", $usuarioId, PDO::PARAM_INT);
        $stmt->execute();
    
        $stmt->closeCursor();  // En lugar de close(), ya que estás usando PDO

        $conexion = null;  // Cerrar la conexión
    
        return true;  // Opcional: puedes devolver un indicador de éxito o algún otro valor según tus necesidades
    }
    
    function updateSalario($usuarioId, $salario) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();
    
        // Agregar una nueva entrada al historial
        $query_update = "update salario SET por_dia = :porDia where usuario_id = :usuarioId";
        $stmt_update = $conexion->prepare($query_update);
        $stmt_update->bindParam(":porDia", $salario, PDO::PARAM_INT);
        $stmt_update->bindParam(":usuarioId", $usuarioId, PDO::PARAM_INT);
        $stmt_update->execute();

        $stmt_update->closeCursor();  // En lugar de close(), ya que estás usando PDO
        
        $conexion = null;  // Cerrar la conexión
    
        return true;  // Opcional: puedes devolver un indicador de éxito o algún otro valor según tus necesidades

    }
    
    function verificarExistenciaSalario($usuarioId) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();
        // Realiza la consulta a la base de datos para verificar si hay datos asociados al usuario
        // El código exacto dependerá de tu implementación y del sistema de base de datos que estés utilizando (ej. MySQL, SQLite, etc.)
        
        // Ejemplo con MySQL
        $query = "SELECT COUNT(*) as count FROM salario WHERE usuario_id = :usuarioId";
        $stmt = $conexion->prepare($query);
        $stmt->bindParam(':usuarioId', $usuarioId, PDO::PARAM_INT);
        $stmt->execute();

        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        return ($result['count'] > 0); // Devuelve true si hay datos, false si no hay datos
    }
    
    
    
    
    function salarioPersonas() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "SELECT p.nombre, u.rol_nombre_activo, s.final AS salario
                      FROM persona p
                      JOIN usuario u ON p.id = u.persona_id
                      JOIN salario s ON p.id = s.persona_id
                      ORDER BY s.final DESC
                      LIMIT 3";

            $stmt = $conexion->query($query);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $resultados;
        } catch (Exception $e) {
            return 'error';
        }
    }
    
    function readSalario() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "SELECT salario.*, persona.nombre AS nombre_persona FROM salario
                      JOIN persona ON salario.persona_id = persona.id";

            $stmt = $conexion->query($query);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);

            return $resultados;
        } catch (Exception $e) {
            return 'error';
        }
    }

    function readSalarioActualporUsuario() { /* Lee el salario actual de cada usuario*/
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
            $query = "SELECT usuario.id,persona.nombre,persona.apellido_paterno,persona.apellido_materno,usuario.rol_nombre_activo,salario.por_dia
            FROM usuario JOIN persona ON usuario.persona_id = persona.id LEFT JOIN salario ON usuario.id = salario.usuario_id";
            $stmt = $conexion->query($query);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        } catch (Exception $e) {
            return 'error';
        }
    }
    
    function deleteSalario() {}
}
?>


