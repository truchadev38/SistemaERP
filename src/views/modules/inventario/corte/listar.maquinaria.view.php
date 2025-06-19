<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Maquinaria</h2>
            <p class="card-description"></p>
            <div class="table-responsive">
            <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Folio</th>
                            <th>Modelo</th>
                            <th>Status</th>
                            <th>Categoria</th>
                            
                        </tr>
                        <?php
                        $InventarioController = new InventarioController();
                        $datos = $InventarioController->mostrarMaquinaria();
                        foreach ($datos as $InventarioController) {
                            echo '<tr>
                                <td>' . $InventarioController['id'] . '</td>
                                <td>' . $InventarioController['folio'] . '</td>
                                <td>' . $InventarioController['modelo'] . '</td>
                                <td>' . $InventarioController['status'] . '</td>
                                <td>' . $InventarioController['categoria_id'] . '</td>
                                <td>
                                    <a href=#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>
                                    <a href=#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalElimina">Borrar</a>
                                    </td>
                            </tr>';
                        }
                        ?>
                </table>
            </div>
            <button id="btnIrMaquinaria" class="btn btn-primary">Agregar maquinaria</button>
            <script>
                document.getElementById('btnIrMaquinaria').addEventListener('click', function() {
                    window.location.href = '/alert-system/nueva-maquinaria';
                });
            </script>
        </div>
    </div>
</div>