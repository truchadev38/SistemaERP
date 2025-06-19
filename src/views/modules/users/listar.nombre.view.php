<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Registrar produccion por hora</h2>
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
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $OperacionController= new OperacionController();
                        $datos=$OperacionController->mostrarOperacionDeOperario();
                        foreach ($datos as $OperacionController) {
                            echo '<tr>
                                <td>' . $OperacionController['id'] . '</td>
                                <td>' . $OperacionController['nombre'] .' '. $OperacionController['apellido_paterno'] .' '. $OperacionController['apellido_materno']. '</td>
                                <td>' . $OperacionController['asignar_operacion'] . '</td>
                                <td>' . $OperacionController['codigo'] . '</td>
                                <td>' . $OperacionController['piezasprod'] .'</td>
                                <td>
                                    
                                    <form method="post" action="">
                                        <label for="produccion_por_hora">Nueva producción por hora:</label>
                                        <input type="hidden" name="id" value="' . $OperacionController['id'] . '">
                                        <input type="number" name="produccion_por_hora" required>
                                        <button type="submit" name="btnActualizar" id="btnActualizar" class="btn btn-primary">Agregar Producción Real</button>
                                    </form>
                                </td>
                            </tr>';
                        }
                        ?>
                        </tbody>
                    </table>
                    <?php
                        $produccionController= new ProduccionRealController();
                        $produccionController->agregarProduccionReal();
                        
                    ?>
                </div>
            </div>
        </div>
    </div>