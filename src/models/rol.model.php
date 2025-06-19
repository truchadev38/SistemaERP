<?php

class RolModel
{
    // Funcion para CRUD a la BD de ROL
    function createRol()
    {
    }
    function readRol()
    {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "SELECT * FROM rol";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            return $result;
        } catch (PDOException $e) {
            throw new Exception("Error en la consulta: " . $e->getMessage());
        }
    }
    
    function updateRol()
    {
    }
    function deleteRol()
    {
    }
}
?>