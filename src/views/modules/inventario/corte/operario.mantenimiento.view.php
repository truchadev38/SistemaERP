    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <!-- Primera tarjeta -->
    <div class="row">
        <div class="produccioneficiencia" style="margin-top:5%;">

            <div class="col-lg-12 grid-margin stretch-card">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex flex-column">
                            <div class="d-flex justify-content-between mb-3">

                                    <!-- START CODE Modal -->
                                    <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                        <div class="modal-header">
                                            <h1 class="modal-title fs-5" id="staticBackdropLabel">Desactivar Maquinaria</h1>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                        </div>
                                        <p>Selecciona un defecto:</p>
                                        <div class="modal-body">
                                        <select name="" id="">
                                        <option value="">Seleccionar....</option>
                                            <option value="">Rompio aguja</option>
                                            <option value="">error</option>
                                            <option value="">Se rompio el gancho</option>
                                            <option value="">No funcion el motor</option>
                                            <option value="">La puntada no es de la medida</option>
                                            <option value="">Se rompio la banda</option>
                                            <option value="">No enciende</option>
                                            <option value="">Cose muy rapido</option>
                                        </select>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Cancelar</button>
                                            <button type="button" class="btn btn-success">Aceptar</button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <!-- END CODE Modal -->
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <thead>
                                            <tr>
                                                <th>id</th>
                                                <th>Numero de serie</th>
                                                <th>Modelo</th>
                                                <th>Estatus</th>
                                                <th>Acciones</th>
                                            </tr>

                                            <?php
                                            $operacionesController = new OperacionController();
                                            $datos = $operacionesController->mostrarMaquinaria();
                                            foreach ($datos as $operacionesController) {


                                                echo '<tr>
                                    <td>' . $operacionesController['id'] . '</td>
                                    <td>' . $operacionesController['N.serie'] . '</td>
                                    <td>' . $operacionesController['modelo'] . '</td>
                                    <td>' . $operacionesController['esatus'] . '</td>

                                    <td>
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#staticBackdrop">Reportar</button>
                                    </td>

                            </tr>';
                                            }
                                            
                                            ?>
                                    </table>
                                </div>
                            </div>
                        </div>
                    


                    </div>
                </div>
                <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>