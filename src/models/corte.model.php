<?php
class CorteModel {
    
    function createCorte($nombre,$costo) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();

        $query = "insert into corte (nombre, costo) values ('$nombre','$costo');";
        $stmt = $conexion->prepare($query);
        $stmt->execute();
    }
    function readCorte() {
        try{
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
            
            $query = "SELECT * FROM corte";
            $stmt = $conexion->prepare($query);
            $stmt->execute();
    
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
            $conexion = null;
    
            return $result;
        } catch (PDOException $e) {
            die("Error en la consulta: " . $e->getMessage());
        }
    }
    function contadorDeCortes()
{
    try {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();
        
        $query = "SELECT COUNT(*) AS total_cortes FROM corte";
        $statement = $conexion->prepare($query); // Cambiado $this->db a $conexion
        $statement->execute();
        $resultado = $statement->fetch(PDO::FETCH_ASSOC);
        return $resultado['total_cortes'];
    } catch (PDOException $e) {
        echo "Error al contar los cortes: " . $e->getMessage();
    }
}
    function updateCorte() {}
    function deleteCorte() {}
}
?>