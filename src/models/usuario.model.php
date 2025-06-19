<?php
class UsuarioModel {
    
    function createUsuario() {
    }
    function readUsuario() {
    }
    //muestra el nombre del usuario que se encuentra activo
    function readNombreUsuario($rol) {
        try{
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "SELECT p.nombre, p.apellido_paterno, p.apellido_materno
            FROM persona p
            JOIN usuario u ON p.id = u.persona_id
            JOIN rol r ON u.rol_nombre_activo = r.nombre
            WHERE r.nombre = '$rol';";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    function readUsuarioNombreOperario() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "SELECT usuario.id AS id_usuario, persona.nombre, persona.apellido_paterno, persona.apellido_materno
                      FROM usuario
                      JOIN persona ON usuario.persona_id = persona.id
                      WHERE usuario.rol_nombre_activo = 'operario';"; // Se agrega la condición de filtro para que únicamente se vean a los operarios

            $stmt = $conexion->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            // Cerrar la conexión (opcional, PDO lo cerrará automáticamente al finalizar el script)
            $conexion = null;

            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    function readUsuarioNombre() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "SELECT usuario.id AS id_usuario, persona.nombre, persona.apellido_paterno, persona.apellido_materno
            FROM usuario JOIN persona ON usuario.id=persona.id;";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            // Cerrar la conexión (opcional, PDO lo cerrará automáticamente al finalizar el script)
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    function updateUsuario() {}
    function deleteUsuario() {}
}
?>