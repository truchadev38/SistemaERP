<?php

// Conecta a la base de datos (ajusta las credenciales según tu configuración)
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "alertSystemDb";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verifica la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Obtén los datos necesarios
$sql = "SELECT id, nombre, costo, piezasprod, porcentaje_incremento FROM operacion_corte";
$result = $conn->query($sql);

// Configura los encabezados
header('Content-Type: application/pdf');
header('Content-Disposition: attachment;filename="reporte_operario.pdf"');
header('Cache-Control: max-age=0');

// Inicia el documento PDF
$pdf = '%PDF-1.4' . "\n";
$pdf .= '1 0 obj << /Type /Catalog /Outlines 2 0 R /Pages 3 0 R >> endobj' . "\n";
$pdf .= '2 0 obj << /Type /Outlines /Count 0 >> endobj' . "\n";
$pdf .= '3 0 obj << /Type /Pages /Kids [4 0 R] /Count 1 >> endobj' . "\n";
$pdf .= '4 0 obj << /Type /Page /Parent 3 0 R /MediaBox [0 0 595 842] /Contents 5 0 R /Resources << /Font << /F1 6 0 R >> >> >> endobj' . "\n";
$pdf .= '5 0 obj << /Length 44 >> stream BT /F1 12 Tf 100 100 Td (Hello, world!) Tj ET endstream' . "\n";
$pdf .= 'endobj' . "\n";
$pdf .= '6 0 obj << /Type /Font /Subtype /Type1 /BaseFont /Times-Roman >> endobj' . "\n";
$pdf .= 'xref' . "\n";
$pdf .= '0 7' . "\n";
$pdf .= '0000000000 65535 f ' . "\n";
$pdf .= '0000000010 00000 n ' . "\n";
$pdf .= '0000000075 00000 n ' . "\n";
$pdf .= '0000000125 00000 n ' . "\n";
$pdf .= '0000000240 00000 n ' . "\n";
$pdf .= '0000000323 00000 n ' . "\n";
$pdf .= '0000000428 00000 n ' . "\n";
$pdf .= 'trailer << /Size 7 /Root 1 0 R >> ' . "\n";
$pdf .= 'startxref' . "\n";
$pdf .= '567' . "\n";
$pdf .= '%%EOF' . "\n";

// Envía el contenido del PDF al navegador
echo $pdf;

// Cierra la conexión
$conn->close();

?>
