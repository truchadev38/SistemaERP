<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/brands.min.css" integrity="sha512-8RxmFOVaKQe/xtg6lbscU9DU0IRhURWEuiI0tXevv+lXbAHfkpamD4VKFQRto9WgfOJDwOZ74c/s9Yesv3VvIQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
            <h2 class="card-title text-center">Materia Prima</h2>
            <p class="card-description"></p>
            <div class="table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Folio</th>
                            <th>Nombre</th>
                            <th>Cantidad</th>
                            <th>Unidad</th>
                            <th>Categoria id</th>
                            <th>Caducidad</th>
                            <th>Tiempo.Entrega</th>
                            <th>Acciones</th>
                        </tr>
                        <?php
                        $InventarioController = new InventarioController();
                        $datos = $InventarioController->mostrarMateriaPrima();
                        foreach ($datos as $InventarioController) {
                            echo '<tr>
                                    <td>' . $InventarioController['id'] . '</td>
                                    <td>' . $InventarioController['folio'] . '</td>
                                    <td>' . $InventarioController['nombre'] . '</td>
                                    <td>' . $InventarioController['cantidad'] . '</td>
                                    <td>' . $InventarioController['unidad'] . '</td>
                                    <td>' . $InventarioController['categoria_id'] . '</td>
                                    <td>' . $InventarioController['tiempo_entrega'] . '</td>
                                    <td>' . $InventarioController['caducidad'] . '</td>
                                    <td>
                                    <form method="POST">
                                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#EditarMateprim">Editar</button>                      

                                    <input type="hidden" name="id_a_eliminar" value="' . $InventarioController['id'] . '">
                                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">Eliminar</button>
                               
                                 <td>
                                 <svg xmlns="http://www.w3.org/2000/svg" height="16" width="16" viewBox="0 0 512 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M410.3 231l11.3-11.3-33.9-33.9-62.1-62.1L291.7 89.8l-11.3 11.3-22.6 22.6L58.6 322.9c-10.4 10.4-18 23.3-22.2 37.4L1 480.7c-2.5 8.4-.2 17.5 6.1 23.7s15.3 8.5 23.7 6.1l120.3-35.4c14.1-4.2 27-11.8 37.4-22.2L387.7 253.7 410.3 231zM160 399.4l-9.1 22.7c-4 3.1-8.5 5.4-13.3 6.9L59.4 452l23-78.1c1.4-4.9 3.8-9.4 6.9-13.3l22.7-9.1v32c0 8.8 7.2 16 16 16h32zM362.7 18.7L348.3 33.2 325.7 55.8 314.3 67.1l33.9 33.9 62.1 62.1 33.9 33.9 11.3-11.3 22.6-22.6 14.5-14.5c25-25 25-65.5 0-90.5L453.3 18.7c-25-25-65.5-25-90.5 0zm-47.4 168l-144 144c-6.2 6.2-16.4 6.2-22.6 0s-6.2-16.4 0-22.6l144-144c6.2-6.2 16.4-6.2 22.6 0s6.2 16.4 0 22.6z"/></svg>                                    </form>     
                                    <svg xmlns="http://www.w3.org/2000/svg" height="16" width="14" viewBox="0 0 448 512"><!--!Font Awesome Free 6.5.1 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2023 Fonticons, Inc.--><path d="M135.2 17.7L128 32H32C14.3 32 0 46.3 0 64S14.3 96 32 96H416c17.7 0 32-14.3 32-32s-14.3-32-32-32H320l-7.2-14.3C307.4 6.8 296.3 0 284.2 0H163.8c-12.1 0-23.2 6.8-28.6 17.7zM416 128H32L53.2 467c1.6 25.3 22.6 45 47.9 45H346.9c25.3 0 46.3-19.7 47.9-45L416 128z"/></svg>

                                 </td>
                                </tr>';
                        }
                        
                        ?>
                </table>
            </div>


            <button id="btnIrMateriaPrima" class="btn btn-primary">Agregar Materia Prima</button>
            <script>
                document.getElementById('btnIrMateriaPrima').addEventListener('click', function() {
                    window.location.href = '/alert-system/nueva-materia-prima';
                });
            </script>

            <!--MODAL PARA ELIMINAR REGISTROS-->
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Confirma para eliminar</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
       preciona el boton Aceptar si estas seguro de eliminar el registro con los siguientes datos: <br>
       <?php
                        $InventarioController = new InventarioController();
                        $datos = $InventarioController->mostrarMateriaPrima();
                        foreach ($datos as $InventarioController) {
                            echo '<tr>
                                  <p><b>Folio: </b> <td>' . $InventarioController['folio'] . '</td></p>
                                   
                                    <p><b>Nombre: </b>  <td>' . $InventarioController['nombre'] . '</td> </p>
                                                         
                                </tr>';
                        }
                        
                        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
        <button type="button" class="btn btn-success">Aceptar</button>
      </div>
    </div>
  </div>
</div>
            <!--VENTANA MODAL para editar-->
            <div class="modal fade" id="EditarMateprim" tabindex="-1" aria-labelledby="modalNuevaCategoriaLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="card-body">
                            <h4 class="card-title">Editar Registro</h4>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label>Folio: </label>
                                    <input type="text" class="form-control" id="folio" name="folio" placeholder="Folio" required>
                                </div>
                                <div class="form-group">
                                    <label>Nombre: </label>
                                    <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                </div>
                                <div class="form-group">
                                    <label>Cantidad: </label>
                                    <input type="text" class="form-control" id="cantidad" name="cantidad" placeholder="cantidad" required>
                                </div>
                                <div class="form-group">
                                    <label>Unidad: </label>
                                    <input type="text" class="form-control" id="unidad" name="unidad" placeholder="Unidad" required>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group row">
                                        <label class="col-sm-3 col-form-label">Categoria</label>
                                        <div class="col-sm-9">
                                            <select class="form-control" id="categoria_id" name="categoria_id">
                                                <option value="">Seleccione...</option>
                                                <?php
                                                $InventarioController = new InventarioController();
                                                $categorias = $InventarioController->mostrarCategoriaMateprim();
                                                ?>
                                            </select>


                                        </div>
                                    </div>

                                    <!-- Ventana modal -->
                                    <div class="modal fade" id="modalNuevaCategoria" tabindex="-1" aria-labelledby="modalNuevaCategoriaLabel" aria-hidden="true">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="card-body">
                                                    <h4 class="card-title">Agregar nueva categoria de materia prima</h4>
                                                    <form action="" method="post">
                                                        <div class="form-group">
                                                            <label>Nombre: </label>
                                                            <input type="text" class="form-control" id="nombre" name="nombre" placeholder="Nombre" required>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Ubicacion: </label>
                                                            <input type="text" class="form-control" id="ubicacion" name="ubicacion" placeholder="Ubicación" required>
                                                        </div>
                                                        <input type="submit" id="btnGuardar" name="btnGuardar" value="Guardar" class="btn btn-primary">
                                                        <?php
                                                        $InventarioController = new InventarioController();
                                                        $InventarioController->agregarCategoriaMateprim();
                                                        ?>
                                                        <button id="btnCancelar" class="btn btn-primary">Cancelar</button>
                                                        <script>
                                                            document.getElementById('btnCancelar').addEventListener('click', function() {
                                                                window.location.href = '/alert-system/nueva-materia-prima';
                                                            });
                                                        </script>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label>Caducidad: </label>
                                        <input type="date" class="form-control" id="caducidad" name="caducidad" required>
                                    </div>

                                    <div class="form-group">
                                        <label>Tiempo de entrega: </label>
                                        <input type="date" class="form-control" id="fecha_entrega" name="fecha_entrega" required>
                                    </div>

                                    <input class="btn btn-primary" type="submit" id="btnGuardar" name="btnGuardar" value="Guardar">
                                    <?php
                                    $InventarioController = new InventarioController();
                                    $InventarioController->agregarMateriaPrima();
                                    ?>
                                    <button id="btnCancelar" class="btn btn-primary">Cancelar</button>
                                    <script>
                                        document.getElementById('btnCancelar').addEventListener('click', function() {
                                            window.location.href = '/alert-system/materia-prima';
                                        });
                                    </script>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/fontawesome.min.js" integrity="sha512-C8qHv0HOaf4yoA7ISuuCTrsPX8qjolYTZyoFRKNA9dFKnxgzIHnYTOJhXQIt6zwpIFzCrRzUBuVgtC4e5K1nhA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>