<?php
session_start();
?>

<div class="col-lg-12 grid-margin stretch-card ">
    <div class="card">
        <div class="card-body">
            <h1 class="text-center"><b>Operario</b></h1>
            <div class="d-flex flex-column"> 
                <div class="d-flex justify-content-between mb-3"> 
                    <div class="card text-bg-dark mr-2" style="max-width: 18rem;">
                    <h4>ID Operario: <?php echo $_SESSION['persona_id']; ?></h4>

                        <?php
                         // Obtener el ID del operario de la sesión
                         $operarioId = $_SESSION['persona_id'];

                         // Imprimir el ID del operario
 
                        $operacionController = new OperacionController();
                        $operarioData = $operacionController->obtenerDatosOperario($idPersonaEspecifico);

                        if (!empty($operarioData)) {
                            echo "<h4><b>NOMBRE:</b> " . $operarioData['nombre'] . "</h4>";
                            echo "<h4><b>CURP:</b> " . $operarioData['curp'] . "</h4>";
                            echo "<h4><b>RFC:</b> " . $operarioData['rfc'] . "</h4>";
                            echo "<h4><b>NSS:</b> " . $operarioData['nss'] . "</h4>";
                        } else {
                            echo "<p>No se encontraron datos del operario.</p>";
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<style>
    .new-card-container {
        display: flex;
        justify-content: flex-end;
    }
</style>


<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <div class="d-flex flex-column"> 
                <div class="d-flex justify-content-between mb-3"> 
                <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>Operacion</th>
                            <th>Costo</th>
                            <th>N.piezas</th>
                            <th>Salario Real</th>
                            <th>Inc.</th>
                            <th>Salario con insentivo</th>
                        </tr>
                        <?php
                       $operacionesController = new OperacionController();
                       $datos = $operacionesController->mostrarOperacion();
                       foreach ($datos as $operacionesController){
                        $costo = $operacionesController['costo'];
                            $piezas = $operacionesController['piezasprod'];
                            $salarioReal = $costo * $piezas;

                            $suledoconinsentivo=$operacionesController['porcentaje_incremento'];
                            $salarioFinal = ($salarioReal * $suledoconinsentivo / 100);

                        echo '<tr>
                                <td>'.$operacionesController['id'].'</td>
                                <td>'.$operacionesController['nombre'].'</td>
                                <td>'.'$ '.$operacionesController['costo'].'</td>
                                <td>'.$operacionesController['piezasprod'].'</td>
                                <td>'.$salarioReal.'</td>
                                <td>'.$operacionesController['porcentaje_incremento'].'%'.'</td>
                                <td>'.$salarioFinal.'</td>
                        </tr>';
                       }
                       ?>
                </table>
            </div>
                </div> 
            </div> 
            <a href="#" onclick="exportarExcel()" class="btn btn-success">Generar Reporte Exel</a>
            <a href="#" onclick="exportarPDF()" class="btn btn-primary">Generar Reportee PDF</a>
        </div>
    </div>
</div>
<script>
function exportarExcel() {
    fetch('reporteExelOperario.php')
        .then(response => response.blob())
        .then(blob => {
            var a = document.createElement('a');
            var url = window.URL.createObjectURL(blob);
            a.href = url;
            a.download = 'reporte_operario.pdf';  // Asegúrate de que coincida con el nombre en tu script PHP
            document.body.appendChild(a);
            a.click();
            window.URL.revokeObjectURL(url);
            document.body.removeChild(a);
        })
        .catch(error => {
            console.error('Error al realizar la solicitud AJAX:', error);
        });
}



function exportarPDF() {
    // Agrega estilos específicos para la impresión
    var style = document.createElement('style');
    style.type = 'text/css';
    style.innerHTML = '@media print { body { margin: 0; } .print-content { display: block; } .no-print { display: none; } }';
    document.head.appendChild(style);

    // Abre la ventana de impresión del navegador
    window.print();

    // Espera un breve momento para asegurarse de que la ventana de impresión se haya abierto
    setTimeout(function () {
        // Elimina los estilos de impresión después de imprimir
        style.parentNode.removeChild(style);
    }, 1000); // Puedes ajustar el tiempo de espera según sea necesario
}


</script>
