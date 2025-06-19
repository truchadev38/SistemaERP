<?php
class inventarioModel
{   
    // Funcion para CRUD a la BD de CATEGORIA MAQUINARIA
    
    function createCategoriaMaquinaria($nombre, $ubicacion) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();

        $query = "insert into categoria_maquinaria (nombre, ubicacion) values ('$nombre','$ubicacion');";
        $stmt = $conexion->prepare($query);
        $stmt->execute();
    }
    function readCategoriaMaquinaria() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "SELECT * FROM categoria_maquinaria";
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
    function updateCategoriaMaquinaria() {}
    function deleteCategoriaMaquinaria() {}

    // Funcion para CRUD a la BD de CATEGORIA MATERIA PRIMA
    function createCategoriaMateprim($nombre, $ubicacion) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();

        $query = "insert into categoria_mp (nombre, ubicacion) values ('$nombre','$ubicacion');";
        $stmt = $conexion->prepare($query);
        $stmt->execute();
    }
    function readCategoriaMateprim() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "SELECT * FROM categoria_mp";
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
    function updateCategoriaMateprim() {}
    function deleteCategoriaMateprim() {}

    // Funcion para CRUD a la BD de MAQUINARIA
    function createMaquinaria($folio, $modelo, $status, $categoria_id) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();
    
        // Supongamos que la tabla donde deseas insertar los datos se llama 'maquinaria'
        $query = "insert into maquinaria (folio, modelo, status, categoria_id) values ('$folio', '$modelo', '$status', '$categoria_id');";
    
        $stmt = $conexion->prepare($query);
    
        if ($stmt->execute()) {
            echo "Datos insertados correctamente en la tabla 'maquinaria'.";
        } else {
            echo "Error al insertar datos.";
        }
    }
    function readMaquinaria() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
            
            $query = "select * from maquinaria";
            $stmt = $conexion->query($query);
            $stmt->execute();
            $resultados = $stmt->fetchAll(PDO::FETCH_ASSOC);
            return $resultados;
        } catch (Exception $e) {
            return 'error';
        }
    }
    function updateMaquinaria() {}
    function deleteMaquinaria() {}

    // Funcion para CRUD a la BD de MATERIA PRIMA
    function createMateriaPrima($folio,$nombre,$cantidad,$unidad,$categoria_id,$caducidad,$tiempo_entrega) {
        $conexionModel = new ConexionModel();
        $conexion = $conexionModel->connect();
    
        // Supongamos que la tabla donde deseas insertar los datos se llama 'maquinaria'
        $query = "insert into materia_prima (folio,nombre,cantidad,unidad,categoria_id,caducidad,tiempo_entrega) values ('$folio', '$nombre', '$cantidad', '$unidad','$categoria_id','$caducidad','$tiempo_entrega');";
    
        $stmt = $conexion->prepare($query);
    
        if ($stmt->execute()) {
            echo "Datos insertados correctamente en la tabla 'materia_prima'.";
        } else {
            echo "Error al insertar datos.";
        }
    }
    function readMateriaPrima() {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();
    
            $query = "SELECT * FROM materia_prima";
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
    function updateMateriaPrima() {   
    }
    function deleteMateriaPrima($id) {
        try {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "DELETE FROM materia_prima WHERE id = :id";
            $stmt = $conexion->prepare($query);
            $stmt->bindParam(':id', $id);
            $eliminado = $stmt->execute();

            $conexion = null; // Cerrar la conexión

            return $eliminado;
        } catch (PDOException $e) {
            // Manejo de errores
            die("Error al eliminar el registro: " . $e->getMessage());
            return false;
        }
    }   
    }
