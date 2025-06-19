<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
    <!--<h2 class="card-title text-center">Operaciones</h2>-->
            <?php
                $CorteController = new CorteController();
                $CorteController->obtenerDatosCorte();
            ?>

            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Código</th>
                            <th scope="col">Nombre de operacion</th>
                            <th scope="col">Tiempo estandar</th>
                            <th scope="col">Costo</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $OperacionController= new OperacionController();
                        $datos=$OperacionController->mostrarOperacionDeCorte();
                        foreach($datos as $OperacionController){
                            echo '<tr>
                            <td>'.$OperacionController['id'].'</td>
                            <td>'.$OperacionController['codigo'].'</td>
                            <td>'.$OperacionController['nombre'].'</td>
                            <td>'.$OperacionController['tiempo_estandar'].'</td>
                            <td>'.$OperacionController['costo'].'</td>
                            <td>
                            <a href=#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>
                            <a href=#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalElimina">Remover</a>
                            </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
            <button id="btnIrMateriaPrima" class="btn btn-primary">Agregar Nueva Operación al Corte</button>
            <script>
                document.getElementById('btnIrMateriaPrima').addEventListener('click', function() {
                    window.location.href = '/alert-systemV2/nueva-operacion';
                });
            </script>
        </div>
    </div>
</div>