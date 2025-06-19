<?php
class EficienciaModel
{
    private $db;

    public function __construct()
    {
        $this->db = new PDO('mysql:host=localhost;dbname=alertSystemDb', 'root', '');
    }

    function readOperacionesParaGrafico()
    {
        try {
            $conexionModel = new ConexionModel(); // Asegúrate de tener la clase ConexionModel
            $conexion = $conexionModel->connect();

            $query = "SELECT piezasprod, tiempo_estandar, costo, produccion_real, produccion_planeada FROM operacion_corte";
            $stmt = $conexion->prepare($query);
            $stmt->execute();

            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

            $conexion = null;

            $datos = [];
            foreach ($result as $fila) {
                // Utiliza nombres de columna más descriptivos
                $datos[] = [
                    'etiqueta' => $fila['piezasprod'],
                    'valor' => $fila['produccion_planeada'],
                ];
            }
            return $datos;
        } catch (PDOException $e) {
            // Lanza una excepción con un mensaje más detallado
            throw new Exception('Error al leer operaciones para gráfico: ' . $e->getMessage());
        }
    }
}
?>
