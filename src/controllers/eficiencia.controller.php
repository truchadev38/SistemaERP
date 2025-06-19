<?php
class EficienciaController
{
    public function mostrarOperaciones()
    {
        try {
            $eficienciaModel = new EficienciaModel();
            $respuesta = $eficienciaModel->readOperacionesParaGrafico();

            // Devolver respuesta como JSON
            echo json_encode(['success' => true, 'data' => $respuesta]);
        } catch (Exception $e) {
            // Devolver mensaje de error como JSON
            echo json_encode(['success' => false, 'error' => $e->getMessage()]);
        }
    }
}

?>
    