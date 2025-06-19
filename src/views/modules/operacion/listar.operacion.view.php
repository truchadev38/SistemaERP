<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Operaciones
            </h2>
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
                            <th scope="col">Usuario Asignado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $OperacionController= new OperacionController();
                        $datos=$OperacionController->mostrarOperacionConUsuarioAsig();
                        foreach($datos as $OperacionController){
                            echo '<tr>
                            <td>'.$OperacionController['id_operacion'].'</td>
                            <td>'.$OperacionController['codigo'].'</td>
                            <td>'.$OperacionController['nombre_operacion'].'</td>
                            <td>'.$OperacionController['tiempo_estandar'].'</td>
                            <td>'.$OperacionController['costo'].'</td>
                            <td>'.$OperacionController['nombre_operario'].' '.$OperacionController['apellido_paterno'].' '.$OperacionController['apellido_materno'].'</td>
                            
                            <td>
                            <form action="" method="post">
                                <input type="hidden" name="id_operacion" value="' . $OperacionController['id_operacion'] . '">
                                <button class="btn btn-success" type="submit" name="btnEditarOperacion">Editar</button>
                                <button class="btn btn-danger" type="submit" name="btnEliminarOperacion">Remover</button>
                            </form>
                            </td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
                <?php
                    $OperacionController = new OperacionController();
                    $OperacionController->eliminarOperacion();
                ?>
            </div>
            <button id="btnIrMateriaPrima" class="btn btn-primary">Agregar Nueva Operación</button>
            <script>
                document.getElementById('btnIrMateriaPrima').addEventListener('click', function() {
                    window.location.href = '/alert-systemV2/nueva-operacion';
                });
            </script>
        </div>
    </div>
</div>