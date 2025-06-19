<?php
    require_once "src/models/conexion.model.php";
    class AuthModel {
        function getUserByUsername($username) {
            $conexionModel = new ConexionModel();
            $conexion = $conexionModel->connect();

            $query = "select * from usuario where usuario = '$username';";
            $stmt = $conexion->prepare($query);  
            
            $stmt->execute();
            $user = $stmt->fetch(PDO::FETCH_ASSOC);
            
            return $user;
        }
        
    }