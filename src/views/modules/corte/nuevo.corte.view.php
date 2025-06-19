<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Agregar nuevo corte</h4>
        <form action="" method="post">  
        <div class="form-group">
            <label>Nombre del corte: </label>
            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
        </div>
        <div class="form-group">
            <label>Costo de prenda:</label>
            <input type="number" class="form-control" id="costo" name="costo" step="0.01" placeholder="Precio" pattern="^\d+(\.\d{1,2})?$" required>
        </div>

        <h4 class="card-title">Asignar operaciones</h4>
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
                        $datos=$OperacionController->mostrarOperacion();
                        foreach($datos as $OperacionController){
                            echo '<tr>
                            <td>
                            <div class="form-check">
                            <label class="form-check-label">
                                <input class="form-check-input" type="checkbox" name="operacion" id="operacion" value="'.$OperacionController['nombre'].'">'.
                            '</label>
                            </div>'.$OperacionController['id'].'</td>
                            <td>'.$OperacionController['codigo'].'</td>
                            <td>'.$OperacionController['nombre'].'</td>
                            <td>'.$OperacionController['tiempo_estandar'].'</td>
                            <td>'.$OperacionController['costo'].'</td>
                            </tr>';
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        <?php
        $OperacionController= new OperacionController();
        $datos=$OperacionController->mostrarOperacion();
        ?>

		<button type="submit" class="btn btn-primary" name="btnGuardar">Guardar</button>
        <?php
            $CorteController = new CorteController();
            $CorteController->agregarCorte();
        ?>
        <button id="btnCancelar" class="btn btn-primary">Cancelar</button>
        <script>
            document.getElementById('btnCancelar').addEventListener('click', function() {
                window.location.href = '/alert-systemV2/corte';
            });
        </script>
	</form>
        </div>
    </div>
</div>
</div>