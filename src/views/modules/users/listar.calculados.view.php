<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Datos calculados por el sistema</h2>
            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table table-striped">
                <thead>
                        <tr>
                            <th scope="col">Objetivo del sistema-unidades</th>
                            <th scope="col">Costo</th>
                            <th scope="col">Producción planeada por dia</th>
                            <th scope="col">Producción planeada por horario</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $OperacionController= new OperacionController();
                        $datos=$OperacionController->mostrarOperacionDeOperario();
                        foreach ($datos as $OperacionController) {
                            $objetivoSisUniRedondeado = round($OperacionController['objetivoSisUni']);
                            $produccionPlaneadaDiaRedondeada = round($OperacionController['produccionPlaneadaDia']);
                            $produccionPlaneadaHoraRedondeada = round($OperacionController['produccionPlaneadaHora']);
                            $costoFormateado = number_format($OperacionController['costo'], 2);
                            echo '<tr>
                                <td>' . $objetivoSisUniRedondeado . '</td>
                                <td>' . $costoFormateado . '</td>
                                <td>' . $produccionPlaneadaDiaRedondeada . '</td>
                                <td>' . $produccionPlaneadaHoraRedondeada . '</td>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Eficiencia de la ultima produccion por hora</h2>
            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre de operario</th>
                            <th scope="col">Operacion Asignada</th>
                            <th scope="col">Codigo de operación</th>
                            <th scope="col">Producion Real</th>
                            <th scope="col">Eficiencia</th>
                            <th scope="col">Diferencia</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $OperacionController= new OperacionController();
                        $datos=$OperacionController->mostrarOperacionDeOperario();
                        foreach ($datos as $OperacionController) {
                            // Formatear la eficiencia como porcentaje
                            $eficienciaPorcentaje = number_format($OperacionController['eficiencia'] * 100, 2) . '%';

                            // Redondear y formatear la diferencia como número entero
                            $diferenciaRedondeada = round($OperacionController['diferencia']);
                            echo '<tr>
                                <td>' . $OperacionController['id'] . '</td>
                                <td>' . $OperacionController['nombre'] .' '. $OperacionController['apellido_paterno'] .' '. $OperacionController['apellido_materno']. '</td>
                                <td>' . $OperacionController['asignar_operacion'] . '</td>
                                <td>' . $OperacionController['codigo'] . '</td>
                                <td>' . $OperacionController['piezasprod'] .'</td>
                                <td>' . $eficienciaPorcentaje . '</td>
                                <td>' . $diferenciaRedondeada . '</td>

                                <td>
                                </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>