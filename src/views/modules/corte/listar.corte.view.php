<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Cortes
            </h2>
            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th scope="col">ID</th>
                            <th scope="col">Nombre de corte</th>
                            <th scope="col">Costo de corte</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $CorteController= new CorteController();
                        $datos=$CorteController->mostrarCorte();
                        //echo '<a href=/alert-systemV2/detalles-corte class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEditar">Ver detalles</a>';
                        foreach($datos as $CorteController){
                            echo '<tr>
                            <td>'.$CorteController['id'].'</td>
                            <td>'.$CorteController['nombre'].'</td> 
                            <td>'.$CorteController['costo'].'</td>
                            <td>
                            
                            <form action="/alert-systemV2/detalles-corte" method="post">
                                    
                                <input type="hidden" name="id" value="' . $CorteController['id'] . '">
                                <input type="hidden" name="nombre" value="' . $CorteController['nombre'] . '">
                                <a>
                                <button type="submit" class="btn btn-success" data-bs-  toggle="modal" data-bs-target="#modalDetalles">Ver detalles</button>
                                </a>
                                <br>    
                            </form>
                            </td>
                            <td>
                            <a href=#" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#modalEditar">Editar</a>
                            <a href=#" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#modalElimina">Borrar</a>
                            </td>
                            </tr>';
                        }
                        
                        ?>
                        <!-- <script>
                            document.getElementById('btnVerDetalles').addEventListener('click', function() {
                                window.location.href = '';
                            });
                        </script> -->
                    </tbody>
                </table>
            </div>
            <button id="btnIrMateriaPrima" class="btn btn-primary">Crear Nuevo corte</button>
            <script>
                document.getElementById('btnIrMateriaPrima').addEventListener('click', function() {
                    window.location.href = '/alert-systemV2/nuevo-corte';
                });
            </script>
        </div>
    </div>
</div>