<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

<div class="col-lg-12 grid-margin stretch-card">
    <div class="card">
        <div class="card-body">
        <h4 class="card-title">Agregar nueva materia prima</h4>
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
                <button id="btnIrNuevCate" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#miModal">Agregar Nueva Categoria</button>
            
               <script>
                     document.getElementById('btnIrNuevCate').addEventListener('click', function() {
        // Muestra la ventana modal al hacer clic en el botón
        var modalNuevaCategoria = new bootstrap.Modal(document.getElementById('modalNuevaCategoria'));
        modalNuevaCategoria.show();});
                </script>
            
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
            $InventarioController-> agregarCategoriaMateprim();
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
            $InventarioController-> agregarMateriaPrima();
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
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
