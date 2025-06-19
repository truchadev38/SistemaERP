<?php
session_start();
require_once '../auth.controller.php';

class AsyncAuthRequest {
    function logout() {
        $authController = new AuthController();
        $response = $authController->logout();
        echo json_encode($response);
    }
    
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Leer el cuerpo de la solicitud (en formato JSON)
    $rawData = file_get_contents('php://input');
    if ($rawData) {
        // Decodificar los datos JSON
        $body = json_decode($rawData, true);
        // Verificar si se ha decodificado correctamente
        if (is_array($body)) {
            // Llamadas al back
            if (isset($body['btnLogout'])) {
                $asyncAuthRequest = new AsyncAuthRequest();
                $asyncAuthRequest->logout();
            }
            // ....continua
        } else {
            echo 'No se pudo decodificar el JSON.';
        }
    } else {
        echo 'No se recibieron datos en el cuerpo de la solicitud.';
    }
}