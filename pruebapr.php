<?php
// Conexión a la base de datos (reemplaza con tus propios detalles de conexión)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "pruebatr";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Manejar la actualización de la producción por hora
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $produccion_por_hora = $_POST["produccion_por_hora"];

    // Actualizar la producción por hora actual
    $sql_actualizacion = "INSERT INTO produccion_actual (produccion_por_hora) VALUES ($produccion_por_hora)";
    $conn->query($sql_actualizacion);

    // Agregar una nueva entrada al historial
    $sql_historial = "INSERT INTO historial_produccion (produccion_por_hora) VALUES ($produccion_por_hora)";
    $conn->query($sql_historial);
}

// Obtener la producción por hora actual
$sql_seleccion = "SELECT produccion_por_hora, fecha_actualizacion FROM produccion_actual ORDER BY fecha_actualizacion DESC LIMIT 1";
$resultado = $conn->query($sql_seleccion);

if ($resultado->num_rows > 0) {
    $fila = $resultado->fetch_assoc();
    $produccion_actual = $fila["produccion_por_hora"];
    $fecha_actualizacion = $fila["fecha_actualizacion"];
} else {
    $produccion_actual = "No disponible";
    $fecha_actualizacion = "No disponible";
}

// Obtener el historial de producción
$sql_historial = "SELECT produccion_por_hora, fecha_actualizacion FROM historial_produccion ORDER BY fecha_actualizacion DESC LIMIT 10";
$resultado_historial = $conn->query($sql_historial);

$conn->close();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualización de Producción por Hora</title>
</head>
<body>
    <h1>Producción por Hora</h1>

    <p>Producción actual: <?php echo $produccion_actual; ?></p>
    <p>Última actualización: <?php echo $fecha_actualizacion; ?></p>

    <h2>Historial de Producción por Hora</h2>
    <ul>
        <?php
        while ($fila_historial = $resultado_historial->fetch_assoc()) {
            echo "<li>{$fila_historial['produccion_por_hora']} - {$fila_historial['fecha_actualizacion']}</li>";
        }
        ?>
    </ul>

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="produccion_por_hora">Nueva producción por hora:</label>
        <input type="number" name="produccion_por_hora" required>
        <button type="submit">Actualizar</button>
    </form>
</body>
</html>
